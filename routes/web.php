<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/dashboard');
});


/*
|--------------------------------------------------------------------------
| Dashboard Pages
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::view('/', 'pages.dashboard.v1')->name('v1');
    Route::view('v2', 'pages.dashboard.v2')->name('v2');
    Route::view('v3', 'pages.dashboard.v3')->name('v3');
});

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
    Route::view('/widgets', 'pages.widgets')->name('widgets');
    Route::view('/celendar', 'pages.celendar')->name('celendar');
    Route::view('/gallery', 'pages.gallery')->name('gallery');
    Route::view('/kanban', 'pages.kanban')->name('kanban');

    /*
    |--------------------------------------------------------------------------
    | Layout Pages
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'layout', 'as' => 'layout.'], function () {
        Route::view('/top-nav', 'pages.layout.top-nav')->name('top-nav');
        Route::view('/top-nav-sidebar', 'pages.layout.top-nav-sidebar')->name('top-nav-sidebar');
        Route::view('/boxed', 'pages.layout.boxed')->name('boxed');
        Route::view('/fixed-sidebar', 'pages.layout.fixed-sidebar')->name('fixed-sidebar');
        Route::view('/fixed-sidebar-custom-area', 'pages.layout.fixed-sidebar-custom-area')->name('fixed-sidebar-custom-area');
        Route::view('/fixed-navbar', 'pages.layout.fixed-navbar')->name('fixed-navbar');
        Route::view('/fixed-footer', 'pages.layout.fixed-footer')->name('fixed-footer');
        Route::view('/collapsed-sidebar', 'pages.layout.collapsed-sidebar')->name('collapsed-sidebar');
    });

    /*
    |--------------------------------------------------------------------------
    | Charts Pages
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'charts', 'as' => 'charts.'], function () {
        Route::view('/chartjs', 'pages.charts.chartjs')->name('chartjs');
        Route::view('/flot', 'pages.charts.flot')->name('flot');
        Route::view('/inline-chart', 'pages.charts.inline-chart')->name('inline-chart');
        Route::view('/uplot', 'pages.charts.uplot')->name('uplot');
    });

    /*
    |--------------------------------------------------------------------------
    | UI Pages
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'ui', 'as' => 'ui.'], function () {
        Route::view('/chartjs', 'pages.ui.general')->name('general');
        Route::view('/icons', 'pages.ui.icons')->name('icons');
        Route::view('/buttons', 'pages.ui.buttons')->name('buttons');
        Route::view('/sliders', 'pages.ui.sliders')->name('sliders');
        Route::view('/modals', 'pages.ui.modals')->name('modals');
        Route::view('/navbar', 'pages.ui.navbar')->name('navbar');
        Route::view('/timeline', 'pages.ui.timeline')->name('timeline');
        Route::view('/ribbons', 'pages.ui.ribbons')->name('ribbons');
    });

    /*
    |--------------------------------------------------------------------------
    | Forms Pages
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'forms', 'as' => 'forms.'], function () {
        Route::view('/general', 'pages.forms.general')->name('general');
        Route::view('/advanced', 'pages.forms.advanced')->name('advanced');
        Route::view('/editors', 'pages.forms.editors')->name('editors');
        Route::view('/validation', 'pages.forms.validation')->name('validation');
    });

    /*
    |--------------------------------------------------------------------------
    | Table Pages
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'tables', 'as' => 'tables.'], function () {
        Route::view('/simple', 'pages.tables.simple')->name('simple');
        Route::view('/data', 'pages.tables.data')->name('data');
        Route::view('/jsgrid', 'pages.tables.jsgrid')->name('jsgrid');
    });

    /*
    |--------------------------------------------------------------------------
    | Mailbox Pages
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'mailbox', 'as' => 'mailbox.'], function () {
        Route::view('/inbox', 'pages.mailbox.inbox')->name('inbox');
        Route::view('/compose', 'pages.mailbox.compose')->name('compose');
        Route::view('/read-mail', 'pages.mailbox.read-mail')->name('read-mail');
    });

    /*
    |--------------------------------------------------------------------------
    | Examples Pages
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'examples', 'as' => 'examples.'], function () {
        Route::view('/invoice', 'pages.examples.invoice')->name('invoice');
        Route::view('/invoice-print', 'pages.examples.invoice-print')->name('invoice-print');
        Route::view('/profile', 'pages.examples.profile')->name('profile');
        Route::view('/e-commerce', 'pages.examples.e-commerce')->name('e-commerce');
        Route::view('/projects', 'pages.examples.projects')->name('projects');
        Route::view('/project-add', 'pages.examples.project-add')->name('project-add');
        Route::view('/project-edit', 'pages.examples.project-edit')->name('project-edit');
        Route::view('/project-detail', 'pages.examples.project-detail')->name('project-detail');
        Route::view('/contacts', 'pages.examples.contacts')->name('contacts');
        Route::view('/faq', 'pages.examples.faq')->name('faq');
        Route::view('/contact-us', 'pages.examples.contact-us')->name('contact-us');
        Route::view('/legacy-user-menu', 'pages.examples.legacy-user-menu')->name('legacy-user-menu');
        Route::view('/language-menu', 'pages.examples.language-menu')->name('language-menu');
        Route::view('/error-404', 'pages.examples.error-404')->name('error-404');
        Route::view('/error-500', 'pages.examples.error-500')->name('error-500');
        Route::view('/pace', 'pages.examples.pace')->name('pace');
        Route::view('/blank', 'pages.examples.blank')->name('blank');

        // Extra Pages
        Route::view('/login', 'pages.examples.login')->name('login');
        Route::view('/register', 'pages.examples.register')->name('register');
        Route::view('/forgot-password', 'pages.examples.forgot-password')->name('forgot-password');
        Route::view('/recover-password', 'pages.examples.recover-password')->name('recover-password');

        Route::view('/login-v2', 'pages.examples.login-v2')->name('login-v2');
        Route::view('/register-v2', 'pages.examples.register-v2')->name('register-v2');
        Route::view('/forgot-password-v2', 'pages.examples.forgot-password-v2')->name('forgot-password-v2');
        Route::view('/recover-password-v2', 'pages.examples.recover-password-v2')->name('recover-password-v2');
        Route::view('/lockscreen', 'pages.examples.lockscreen')->name('lockscreen');
    });

    /*
    |--------------------------------------------------------------------------
    | Search Pages
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'search', 'as' => 'search.'], function () {
        Route::view('/simple', 'pages.search.simple')->name('simple');
        Route::view('/simple-results', 'pages.search.simple-results')->name('simple-results');
        Route::view('/enhanced', 'pages.search.enhanced')->name('enhanced');
        Route::view('/enhanced-results', 'pages.search.enhanced-results')->name('enhanced-results');
    });

});
