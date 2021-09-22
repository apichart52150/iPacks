<?php

// ==================== Routes User ====================== //
    Auth::routes();
    Route::get('/', function () {
        if (Auth::guard('web')->check()) {
            return redirect('user_home');
        }
        return redirect('login');
    });

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    Route::prefix('trial')->group(function () {
        Route::get('home', 'TrialController@index')->name('trial_home');
        Route::get('listening', 'TrialController@listening')->name('trial_listening');
        Route::get('reading', 'TrialController@reading')->name('trial_reading');
        Route::get('language', 'TrialController@language')->name('trial_language');
    });

    Route::group(['middleware' => 'auth:web'], function () {

        Route::get('browser-settings', function () {
            return view('student.ipack.speaking.browser_settings');
        })->name('browser-settings');

        Route::get('wait', function () {
            return view('student.wait');
        })->name('wait');

        Route::get('success', function () {
            return view('student.success');
        })->name('success');

        Route::get('expire', function () {
            return view('student.expire');
        })->name('expire');

        Route::prefix('payment')->namespace('Payment')->group(function () {
            
            Route::get('payment/{status}', 'paymentController@payment_form')->name('paymentForm');
            Route::post('payment/confirm', 'paymentController@payment_confirm')->name('paymentConfirm');
            Route::get('payment_success', 'paymentController@payment_success')->name('payment_success');
            Route::get('receipt', 'paymentController@receipt')->name('receipt');

            Route::get('payment_fail', function () {
                return view('payment.fail');
            })->name('pay_fail');
        });

        Route::get('user_home', 'student\HomeController@index')->name('user_home');

        Route::get('ipack_reading', 'student\HomeController@ipack_reading')->name('ipack_reading');
        Route::get('strategies_pack', 'student\HomeController@strategies_pack')->name('strategies_pack');
        Route::get('topic_pack', 'student\HomeController@topic_pack')->name('topic_pack');

        // sac speaking
        Route::prefix('')->namespace('student\ipack\speakingController')->group(function () {

            Route::get('speaking', 'HomeController@index')->name('ipack_speaking');

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

        // sac writing
        Route::prefix('')->namespace('student\ipack\writingController')->group(function () {

            Route::get('ipack_writing', 'HomeController@index')->name('ipack_writing');

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

        Route::prefix('ipack')->namespace('student\ipack\listeningController')->group(function () {

            Route::get('listening', 'HomeController@index')->name('ipack_listening');
            Route::post('submenu', 'HomeController@submenu')->name('sub_menu');
            Route::get('listening/{exam_type}/{exam_id}', 'HomeController@exam')->name('listening/{exam_type}/{exam_id}');
        });

        Route::prefix('language')->namespace('student\ipack\languageController')->group(function () {

            Route::get('language', 'HomeController@index')->name('ipack_language');
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

        Route::get('clubs','student\ClubsController@index')->name('clubs');
        Route::post('clubs/book','student\ClubsController@book')->name('clubs-book');

        Route::get('tutorail','student\TutorialController@index')->name('tutorail');
    });

    // ==================== Routes Detail ==================== //

        Route::get('detail/standard', function () {
            return view('detail.standard');
        });

        Route::get('detail/premium', function () {
            return view('detail.premium');
        });

    // ==================== End Routes Detail ====================== //


// ==================== End Routes User ====================== //




// ==================== Routes Admin ==================== //
    Route::get('admin', function () {
        if (Auth::guard('staff')->check()) {
            return redirect('admin_home');
        } else {
            return redirect('admin_login');
        }
    });

    Route::get('admin_login', 'Admin\LoginAdminController@admin_login')->name('admin_login');
    Route::post('_login', 'Admin\LoginAdminController@_login')->name('_login');
    Route::get('admin_logout', 'Admin\LoginAdminController@admin_logout')->name('admin_logout');

    Route::middleware(['auth:staff'])->group(function () {

        Route::prefix('')->namespace('Admin')->group(function () {

            Route::get('admin_home', 'HomeController@index')->name('admin_home');

            Route::get('staff', 'StaffController@index')->name('staff');
            Route::post('addstaff', 'StaffController@addstaff')->name('addstaff');

            Route::get('edit/{id?}', 'StaffController@edit');
            Route::post('edit/staffupdate/{id?}', 'StaffController@staffupdate');

            Route::post('staffdelete/{id?}', 'StaffController@staffdelete');
        });

        //Speaking
        Route::prefix('speaking')->namespace('Admin\ipack\speaking')->group(function () {

            Route::get('dashboard', 'DashboardController@index')->name('speaking_dashboard');
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
            Route::get('users', 'ReportController@users')->name('report_users');

            Route::post('reportAll', 'ReportController@reportAllAjax')->name('reportAll');
            Route::get('view/{id}', 'ReportController@view_history')->name('view');

            Route::get('teacher/{id}/pending', 'ReportController@teacher_pending')->name('teacher.pending');

            Route::get('restatus/{id}', 'ReportController@reStatus')->name('restatus');
            Route::get('delete/{id}', 'ReportController@delete_topic')->name('delete.pending');
        });

        //Writing
        Route::prefix('writing')->namespace('Admin\isac\writing')->group(function () {

            Route::get('dashboard', 'DashboardController@index')->name('writing_dashboard');
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

        //Clubs
        Route::prefix('clubs')->namespace('Admin\club')->group(function () {

            Route::get('list','HomeController@index')->name('clubs-list');
            Route::get('history/{date}/{status}','HomeController@history');
            Route::post('confirm','HomeController@confirm')->name('clubs-confirm');
            
        });

        //Tutorial
        Route::prefix('tutorial')->namespace('Admin\ipack\tutorial')->group(function () {

            
        });
    });
// ==================== End Routes Admin ====================== //
