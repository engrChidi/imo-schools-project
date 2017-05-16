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
    Route::get('/home', 'HomeController@index')->name('home');

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

    Route::group(['prefix' => 'user'], function()
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
        Route::get('/activate/{token}', ['as' => $a . 'activate', 'uses' => 'ActivateController@activate']);
        Route::get('/activate', ['as' => $a . 'activation-resend', 'uses' => 'ActivateController@resend']);
    });

    Route::get('not-activated', ['as' => 'not-activated', 'uses' => function () {
        return view('errors.not-activated');
    }]);

