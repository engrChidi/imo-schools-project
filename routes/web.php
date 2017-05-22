<?php

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    // Don't forget to add activated middleware to this route
    Route::group(['middleware' => 'usertype'], function(){
        Route::get('/home', 'HomeController@index')->name('home');
    });

    /* Routes for other pages on the website */

    Route::get('/policy', [
        'uses'      =>      'PageController@getPolicy',
        'as'        =>      'policy'
    ]);

    Route::get('/terms', [
        'uses'      =>      'PageController@getTerms',
        'as'        =>      'terms'
    ]);

    /* Route to check usertype for a particular user */

    Route::get('/check-users-details', [
        'uses'      =>      'UserController@checkUser',
        'as'        =>      'check-user-details'
    ]);

    Route::group(['prefix' => 'user', 'middleware' => ['auth', 'usertype']], function()
    {
        Route::get('/teacher', [
            'uses'      =>      'UserController@showTeacher',
            'as'        =>      'teacher'
        ]);

        Route::get('/student', [
            'uses'      =>      'UserController@showStudent',
            'as'        =>      'student'
        ]);

        Route::get('/school', [
            'uses'      =>      'UserController@showSchool',
            'as'        =>      'school'
        ]);

        Route::get('/business', [
            'uses'      =>      'UserController@showBusiness',
            'as'        =>      'business'
        ]);

    });

    Route::post('user/update-info/{id}', [
       'uses'       =>      'UserController@usertypeUpdate',
        'as'        =>      'usertype-update'
    ]);

    /* Route for social providers */
    $s = 'social.';
    Route::get('/social/redirect/{provider}', [
        'as' => $s . 'redirect',
        'uses' => 'SocialController@getSocialRedirect'
    ]);

    Route::get('/social/handle/{provider}', [
        'as' => $s . 'handle',
        'uses' => 'SocialController@getSocialHandle'
    ]);

    /* Routes for Authentication */
    Route::group(['middleware' => 'auth'], function()
    {
        $a = 'authenticated.';
        Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\LoginController@logout']);
        Route::get('/activate/{token}', ['as' => $a . 'activate', 'uses' => 'ActivationController@activate']);
        Route::get('/activate', ['as' => $a . 'activation-resend', 'uses' => 'ActivationController@resend']);
    });

    Route::get('not-activated', ['as' => 'not-activated', 'uses' => function () {
        return view('errors.not-activated');
    }]);

    /* Route for more info for users */

    Route::get('/more-info',[
       'uses'       =>      'UserController@moreInfo',
        'as'        =>      'more-info'
    ]);

    /* Route to update details for all users irrespective of the user type */
    Route::post('/update/schools-details/{id}', [
       'uses'       =>      'UserController@updateDetailsSchool',
        'as'        =>      'update-school-details'
    ]);

    Route::post('/update/teachers-details/{id}', [
        'uses'       =>      'UserController@updateDetailsTeacher',
        'as'        =>      'update-teachers-details'
    ]);

    Route::post('/update/business-details/{id}', [
        'uses'       =>      'UserController@updateDetailsBusiness',
        'as'        =>      'update-business-details'
    ]);


    /* Routes for OTP within the application */
    Route::group(['middleware' => 'auth'], function(){
        Route::post('/sendOtp',[
            'uses'       =>      'UserController@sendOtp',
            'as'        =>      'sendOtp'
        ]);

        Route::post('/verifyOtp',[
            'uses'       =>      'UserController@verifyOtp',
            'as'        =>      'verifyOtp'
        ]);

        Route::get('/verifyOtp',[
            'uses'       =>      'UserController@getVerifyOtp',
            'as'        =>      'getVerifyOtp'
        ]);
    });
