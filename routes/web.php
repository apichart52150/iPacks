<?php


// ==================== Routes User ====================== //
	Auth::routes();
	Route::get('/', function() {
		if(Auth::guard('web')->check()) {
			return redirect('user_home');
		}else {
			return redirect('login');
		}
	});

	Route::get('logout','Auth\LoginController@logout')->name('logout');

	Route::middleware(['auth:web'])->group(function () {

		Route::get('user_home', 'student\HomeController@index')->name('user_home');

		Route::get('browser-settings', function() {
			return view('student.isac.speaking.browser_settings');
		})->name('browser-settings');

		Route::get('wait', function() {
			return view('student.wait');
		})->name('wait');

		Route::get('success', function() {
			return view('student.success');
		})->name('success');

		Route::get('expire', function() {
			return view('student.expire');
		})->name('expire');
		

		Route::get('payment/{status}', 'payment\paymentController@form_payment')->name('payment');
		Route::post('confirm_payment', 'payment\paymentController@payment')->name('confirm_payment');

		Route::get('isac_reading', 'student\HomeController@isac_reading')->name('isac_reading');
		Route::get('strategies_pack', 'student\HomeController@strategies_pack')->name('strategies_pack');
		Route::get('topic_pack', 'student\HomeController@topic_pack')->name('topic_pack');
		
		// sac speaking
		Route::prefix('')->namespace('student\isac\speakingController')->group(function () {

			Route::get('isac_speaking_home', 'HomeController@index')->name('isac_speaking_home');

			// student status
			Route::get('status_speaking', 'HomeController@status_speaking')->name('status_speaking');
			Route::get('status_speaking/{id?}', 'HomeController@status_speaking_topic')->name('status_speaking');

			Route::post('insertlog', 'HomeController@insertlog');

			// Route Speaking test
			Route::get('intro/{topic}', 'SpeakingController@intro');
			Route::get('record/{topic}', 'SpeakingController@record');
			Route::get('submit/{topic}', 'SpeakingController@submit');
			Route::post('saveSound', 'SpeakingController@saveSound');
			Route::post('update_score_course', 'SpeakingController@update_score_course')->name('update_score_course');

		});
		
		// sac writing
		Route::prefix('')->namespace('student\isac\writingController')->group(function () {

			Route::get('isac_writing_home', 'HomeController@index')->name('isac_writing_home');
		
			Route::post('writing_test', 'WritingController@index')->name('writing_test');
			Route::post('store_sac', 'WritingController@store_sac')->name('store.sac');

			Route::get('status_writing', 'HomeController@status_writing')->name('status_writing');
			Route::get('status_writing/{id?}', 'HomeController@status_topic')->name('status_writing');

			Route::prefix('view')->group(function () {
			Route::get('commented/{sacid}', 'ViewController@view_commented')->name('commented');
			Route::get('saved/{sacid}', 'ViewController@view_saved')->name('saved');
			});
			Route::post('store_sac_save', 'ViewController@store_sac_save')->name('store.sac-save');
		});

		Route::prefix('isac')->namespace('student\isac\listeningController')->group(function () {
			Route::get('listening', 'HomeController@index')->name('listening');
			Route::post('submenu', 'HomeController@submenu')->name('sub_menu');
			Route::get('listening/{exam_type}/{exam_id}', 'HomeController@exam')->name('listening/{exam_type}/{exam_id}');
		});

		Route::prefix('language')->namespace('student\isac\languageController')->group(function () {
			Route::get('home', 'HomeController@index')->name('language_home');
			Route::get('{topic}', 'TopicController@index');

			Route::prefix('Intermediate')->group(function () {
				Route::prefix('{sub_topic}')->group(function () {
					Route::get('/', 'ActivityController@index');
					Route::get('/{sub_menu_id}', 'ActivityController@exam');
				});
			});

			Route::prefix('Advanced')->group(function () {
				Route::prefix('{sub_topic}')->group(function () {
					Route::get('/', 'ActivityController@index');
					Route::get('/{sub_menu_id}', 'ActivityController@exam');
				});
			});

			Route::prefix('Report')->group(function () {
				Route::prefix('{sub_topic}')->group(function () {
					Route::get('/', 'ActivityController@index');
					Route::get('/{sub_menu_id}', 'ActivityController@exam');
				});
			});

			Route::prefix('Essays')->group(function () {
				Route::prefix('{sub_topic}')->group(function () {
					Route::get('/', 'ActivityController@index');
					Route::get('/{sub_menu_id}', 'ActivityController@exam');
				});
			});
		});
	});

// ==================== End Rou tes User ====================== //



// ==================== Routes Admin ==================== //
	Route::get('admin', function() {
		if(Auth::guard('web')->check()) {
			return redirect('admin_home');
		}else {
			return redirect('login');
		}
	});
	
	Route::middleware(['auth:web'])->group(function () {

		Route::prefix('')->namespace('Admin')->group(function () {

			Route::get('admin_home', 'HomeController@index');

			Route::get('student','StudentController@index')->name('student');
			Route::post('addstudent', 'StudentController@addstudent')->name('addstudent');

			Route::get('edit/{id?}','StudentController@edit');
			Route::post('edit/studentupdate/{id?}', 'StudentController@studentupdate');

			Route::post('studentdelete/{id?}', 'StudentController@studentdelete');
		});

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
