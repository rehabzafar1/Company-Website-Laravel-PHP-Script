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

//front routes
Route::get('/','Front\PageController@index')->name('index');
Route::get('career','Front\PageController@career')->name('career');
Route::get('faqs','Front\PageController@faqs')->name('faqs');
Route::get('pricing','Front\PageController@pricing')->name('pricing');
Route::get('our-team','Front\PageController@ourTeam')->name('team');
Route::get('team-detail','Front\PageController@teamDetail')->name('team.detail');
Route::get('our-services','Front\PageController@ourServices')->name('our.services');
Route::get('service-detail/{id}','Front\PageController@serviceDetail')->name('service.detail');
Route::get('about-us','Front\PageController@aboutUs')->name('about.us');
Route::get('contact','Front\PageController@contact')->name('contact');
Route::POST('email/store','Front\EmailQueryController@store')->name('email.store');
//Route::get('email',function (){
//    return view('admin.email-queries.email-reply');
//});
//backend routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard','PageController@dashboard')->name('home');
    Route::resource('employee', 'EmployeeController');
    Route::resource('package', 'PackageController');
    Route::resource('package-option', 'PackageOptionController');
    Route::resource('service', 'ServiceController');
    Route::resource('career-category', 'CareerCategoryController');
    Route::resource('jobs', 'JobController');
    Route::get('emails','EmailQueryController@index')->name('emails');
    Route::get('emails/destroy/{id}','EmailQueryController@destroy')->name('email.destroy');
    Route::POST('emails/reply/{id}','EmailQueryController@queryReply')->name('email.reply');
    Route::resource('sub-service','SubServiceController');
});
