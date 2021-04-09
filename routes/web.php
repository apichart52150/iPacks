<?php


// ==================== Routes User ====================== //
	Route::get('/', function() {
		if(session('std_id')) {
			return redirect('user_home');
		}else {
			return redirect('user_login');
		}
	});

	Route::get('user_login', 'Session\LoginStdController@index')->name('user_login');
	Route::post('fn_login', 'Session\LoginStdController@fn_login')->name('fn_login');
	Route::get('user_logout', 'Session\LoginStdController@fn_logout')->name('user_logout');

	Route::get('browser-settings', function() {
		return view('student.isac.speaking.browser_settings');
	})->name('browser-settings');

	Route::get('user_home', function() {
		return view('student.user_home');
	})->name('user_home');

	Route::get('user_profile', function() {
        $profile = \App\Model\Profile::getProfile();
        return view('student.user_profile', compact('profile'));
    });


// ---------------------- iSAC Speaking ---------------------- //


	Route::get('/isac_speaking_home', 'student\isac\speakingController\HomeController@index')->name('isac_speaking_home');

	// student status
	Route::get('status_speaking', 'student\isac\speakingController\HomeController@status_speaking')->name('status_speaking');
	Route::get('status_speaking/{id?}', 'student\isac\speakingController\HomeController@status_speaking_topic')->name('status_speaking');

	Route::get('profile', 'HomeController@user_profile')->name('profile');

	Route::post('insertlog', 'student\isac\speakingController\HomeController@insertlog');

	// Route Speaking test
	Route::get('intro/{topic}', 'student\isac\speakingController\SpeakingController@intro');
	Route::get('record/{topic}', 'student\isac\speakingController\SpeakingController@record');
	Route::get('submit/{topic}', 'student\isac\speakingController\SpeakingController@submit');
	Route::post('saveSound', 'student\isac\speakingController\SpeakingController@saveSound')->name("saveSound");
	Route::post('update_score_course', 'student\isac\speakingController\SpeakingController@update_score_course')->name('update_score_course');


// ---------------------- iSAC Speaking ---------------------- //


// ---------------------- iSAC Writing ---------------------- //

	Route::get('isac_writing_home', 'student\isac\writingController\HomeController@index')->name('isac_writing_home');

	
	Route::post('writing_test', 'student\isac\writingController\WritingController@index')->name('writing_test');
	Route::post('store_sac', 'student\isac\writingController\WritingController@store_sac')->name('store.sac');
	Route::get('success', function() {
		return view('student.isac.writing.success');
	});

	Route::get('status_writing', 'student\isac\writingController\HomeController@status_writing')->name('status_writing');
	Route::get('status_writing/{id?}', 'student\isac\writingController\HomeController@status_topic')->name('status_writing');
	
	Route::get('view/{sacid}', 'ViewSaveController@view_success');
	Route::get('/viewsave/{sacid}', 'ViewSaveController@view_save');
	Route::post('store_sac_save', 'ViewSaveController@store_sac_save')->name('store.sac-save');

	Route::get('profile', function() {
		$profile = \App\Model\Profile::getProfile();
		return view('student.isac.profile', compact('profile'));
	});
// ---------------------- iSAC Writing ---------------------- //


// ==================== End Routes User ====================== //



// ==================== Routes Admin ==================== //

	Auth::routes();
	Route::get('admin', function() {
		if(Auth::check()) {
			return redirect('admin_home');
		}else {
			return redirect('login');
		}
	});
	Route::get('admin_home', 'Admin\HomeController@index');


	// ---------------------- Speaking ---------------------- //
		Route::group(['prefix' => 'speaking', 'middleware' => 'auth'], function () {

			Route::get('dashboard', 'Admin\isac\speaking\DashboardController@index');
			Route::get('receive/{id}', 'Admin\isac\speaking\DashboardController@receive')->name('receive');

			Route::get('pending', 'Admin\isac\speaking\PendingController@index');
			Route::get('check/{id}', 'Admin\isac\speaking\PendingController@check')->name('check');
			Route::post('check_submit', 'Admin\isac\speaking\PendingController@check_submit')->name('check_submit');

			Route::get('completed', 'Admin\isac\speaking\CompleteController@index');
			Route::post('completeAjax', 'Admin\isac\speaking\CompleteController@completeAjax')->name('completeAjax');
			Route::get('completed/{id}', 'Admin\isac\speaking\CompleteController@history')->name('completed');

			Route::get('manage', 'Admin\isac\speaking\ManageController@index')->name('manage');
			Route::get('all/{id}', 'Admin\isac\speaking\ManageController@view')->name('all');
			Route::post('delete', 'Admin\isac\speaking\ManageController@delete')->name('delete');
			
		});

		Route::group(['prefix' => 'speaking/report', 'middleware' => 'auth'], function () {

			Route::any('teachers', 'Admin\isac\speaking\ReportController@teachers')->name('report_teachers');
			Route::get('students', 'Admin\isac\speaking\ReportController@students')->name('report_students');

			Route::post('reportAll', 'Admin\isac\speaking\ReportController@reportAllAjax')->name('reportAll');
			Route::get('view/{id}', 'Admin\isac\speaking\ReportController@view_history')->name('view');

			Route::get('teacher/{id}/pending', 'Admin\isac\speaking\ReportController@teacher_pending')->name('teacher.pending');

			Route::get('restatus/{id}', 'Admin\isac\speaking\ReportController@reStatus')->name('restatus');
			Route::get('delete/{id}', 'Admin\isac\speaking\ReportController@delete_topic')->name('delete.pending');
		});

		

	// ---------------------- Speaking ---------------------- //

	// ---------------------- Writing ---------------------- //
		Route::group(['prefix' => 'writing', 'middleware' => 'auth'], function () {

			Route::get('dashboard', 'Admin\isac\writing\DashboardController@index');
			Route::get('receive/{id}', 'Admin\isac\writing\DashboardController@receive')->name('receive_writing');

			Route::get('pending', 'Admin\isac\writing\PendingController@index');
			Route::get('check/{id}', 'Admin\isac\writing\PendingController@check')->name('check_writing');
			Route::post('check_submit', 'Admin\isac\writing\PendingController@check_submit')->name('check_writing_submit');

			Route::get('completed', 'Admin\isac\writing\CompleteController@index');
			Route::post('completeAjax_writing', 'Admin\isac\writing\CompleteController@completeAjax_writing')->name('completeAjax_writing');
			Route::get('completed/{id}', 'Admin\isac\writing\CompleteController@history')->name('completed_writing');

			Route::get('manage', 'Admin\isac\writing\ManageController@index')->name('manage_writing');
			Route::get('all/{id}', 'Admin\isac\writing\ManageController@view')->name('all_writing');
			Route::post('delete', 'Admin\isac\writing\ManageController@delete')->name('delete_writing');
		});

		Route::group(['prefix' => 'writing/report', 'middleware' => 'auth'], function () {

			Route::any('teachers', 'Admin\isac\writing\ReportController@teachers')->name('report_writing_teachers');
			Route::get('students', 'Admin\isac\writing\ReportController@students')->name('report_writing_students');
			
			Route::post('reportWriting', 'Admin\isac\writing\ReportController@reportWritingAjax')->name('reportWriting');
			Route::get('view/{id}', 'Admin\isac\writing\ReportController@view_history')->name('view_writing');

			Route::get('teacher_writing/{id}/pending', 'Admin\isac\writing\ReportController@teacher_pending')->name('teacher_writing.pending');

			Route::get('restatus_writing/{id}', 'Admin\isac\writing\ReportController@reStatus')->name('restatus_writing');
			Route::get('delete_writing/{id}', 'Admin\isac\writing\ReportController@delete_topic')->name('delete_writing.pending');
		});
	// ---------------------- Writing ---------------------- //
	
// ==================== End Routes Admin ====================== //

