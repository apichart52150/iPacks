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

	Route::middleware(['user'])->group(function () {

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
		
		Route::prefix('')->namespace('student\isac\speakingController')->group(function () {

			Route::get('/isac_speaking_home', 'HomeController@index')->name('isac_speaking_home');

			// student status
			Route::get('status_speaking', 'HomeController@status_speaking')->name('status_speaking');
			Route::get('status_speaking/{id?}', 'HomeController@status_speaking_topic')->name('status_speaking');

			Route::post('insertlog', 'HomeController@insertlog');

			// Route Speaking test
			Route::get('intro/{topic}', 'SpeakingController@intro');
			Route::get('record/{topic}', 'SpeakingController@record');
			Route::get('submit/{topic}', 'SpeakingController@submit');
			Route::post('saveSound', 'SpeakingController@saveSound')->name("saveSound");
			Route::post('update_score_course', 'SpeakingController@update_score_course')->name('update_score_course');

		});
		


		Route::prefix('')->namespace('student\isac\writingController')->group(function () {

			Route::get('isac_writing_home', 'HomeController@index')->name('isac_writing_home');
		
			Route::post('writing_test', 'WritingController@index')->name('writing_test');
			Route::post('store_sac', 'WritingController@store_sac')->name('store.sac');
			Route::get('success', function() {
				return view('student.isac.writing.success');
			});

			Route::get('status_writing', 'HomeController@status_writing')->name('status_writing');
			Route::get('status_writing/{id?}', 'HomeController@status_topic')->name('status_writing');

			Route::prefix('view')->group(function () {
			Route::get('commented/{sacid}', 'ViewController@view_commented')->name('commented');
			Route::get('saved/{sacid}', 'ViewController@view_saved')->name('saved');
			});
			Route::post('store_sac_save', 'ViewController@store_sac_save')->name('store.sac-save');
		});
	});

// ==================== End Rou tes User ====================== //



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

	Route::middleware(['auth'])->group(function () {

		//Speaking
		Route::prefix('speaking')->namespace('Admin\isac\speaking')->group(function () {

			Route::get('dashboard', 'DashboardController@index');
			Route::get('receive/{id}', 'DashboardController@receive')->name('receive');

			Route::get('pending', 'PendingController@index');
			Route::get('check/{id}', 'PendingController@check')->name('check');
			Route::post('check_submit', 'PendingController@check_submit')->name('check_submit');

			Route::get('completed', 'CompleteController@index');
			Route::post('completeAjax', 'CompleteController@completeAjax')->name('completeAjax');
			Route::get('completed/{id}', 'CompleteController@history')->name('completed');

			Route::get('manage', 'ManageController@index')->name('manage');
			Route::get('all/{id}', 'ManageController@view')->name('all');
			Route::post('delete', 'ManageController@delete')->name('delete');
			
		});
		Route::prefix('speaking/report')->namespace('Admin\isac\speaking')->group(function () {

			Route::any('teachers', 'ReportController@teachers')->name('report_teachers');
			Route::get('students', 'ReportController@students')->name('report_students');

			Route::post('reportAll', 'ReportController@reportAllAjax')->name('reportAll');
			Route::get('view/{id}', 'ReportController@view_history')->name('view');

			Route::get('teacher/{id}/pending', 'ReportController@teacher_pending')->name('teacher.pending');

			Route::get('restatus/{id}', 'ReportController@reStatus')->name('restatus');
			Route::get('delete/{id}', 'ReportController@delete_topic')->name('delete.pending');
		});

		//Writing
		Route::prefix('writing')->namespace('Admin\isac\writing')->group(function () {

			Route::get('dashboard', 'DashboardController@index');
			Route::get('receive/{id}', 'DashboardController@receive')->name('receive_writing');

			Route::get('pending', 'PendingController@index');
			Route::get('check/{id}', 'PendingController@check')->name('check_writing');
			Route::post('check_submit', 'PendingController@check_submit')->name('check_writing_submit');

			Route::get('completed', 'CompleteController@index');
			Route::post('completeAjax_writing', 'CompleteController@completeAjax_writing')->name('completeAjax_writing');
			Route::get('completed/{id}', 'CompleteController@history')->name('completed_writing');

			Route::get('manage', 'ManageController@index')->name('manage_writing');
			Route::get('all/{id}', 'ManageController@view')->name('all_writing');
			Route::post('delete', 'ManageController@delete')->name('delete_writing');
		});
		Route::prefix('writing/report')->namespace('Admin\isac\writing')->group(function () {

			Route::any('teachers', 'ReportController@teachers')->name('report_writing_teachers');
			Route::get('students', 'ReportController@students')->name('report_writing_students');
			
			Route::post('reportWriting', 'ReportController@reportWritingAjax')->name('reportWriting');
			Route::get('view/{id}', 'ReportController@view_history')->name('view_writing');

			Route::get('teacher_writing/{id}/pending', 'ReportController@teacher_pending')->name('teacher_writing.pending');

			Route::get('restatus_writing/{id}', 'ReportController@reStatus')->name('restatus_writing');
			Route::get('delete_writing/{id}', 'ReportController@delete_topic')->name('delete_writing.pending');
		});

	});
	
// ==================== End Routes Admin ====================== //
