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
    return view('index');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});

Auth::routes();
Route::resource('runners', 'RunnersController');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/home', 'HomeController@index')->name('home');
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::get('/admin/refno', 'RunnersController@generateRefNo');
    Route::get('/admin/registrants', 'RunnersController@registrants');
    Route::get('/admin/search', 'RunnersController@nameSearch');
    Route::get('/admin/runners/{id}', 'RunnersController@adminRegistrant')->name('runners');
    Route::get('/admin/runners/{id}', 'RunnersController@adminRegistrant')->name('runners');
    Route::get('/admin/runners/gender/{gender}', 'RunnersController@genderShow')->name('gender');
    Route::get('/admin/runners/distance/{distance}', 'RunnersController@distanceShow')->name('distance');
    Route::get('/admin/runners/payment/{payment}', 'RunnersController@paymentShow')->name('distance');
    Route::get('updatePayment/{id}', 'RunnersController@updatePayment')->name('updatePayment');
    Route::get('delRegRunner/{id}', 'RunnersController@destroy')->name('delRegRunner');
    Route::get('racebib', 'RaceBibController@index');
    Route::get('mail/sendMail','HomeController@sendMail');
    Route::get('remindMail/{id}','HomeController@remindMail')->name('remindMail');
}); 

