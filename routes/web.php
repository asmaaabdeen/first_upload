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

Route::get('/', 'indexController@index');
Route::get('/payment', 'BillingController@paymentMethod');
Route::post('/login','BillingController@savePayment');
Route::get('/register/submit','customerscontroller@register');
Route::post('/register','customerscontroller@store');


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/secondContact', function () {
    return view('secondContact');
});



Route::get('/updates', function () {
//    return 1234;

    return view('customerfolder/updates');
});
    // Route::get('/updates','updatescontroller@update');


    //Route::get('/profile.show','profileController@show');

    Route::resource('/profile', 'profileController') ;

   //make order



   Route::get('/shopping', 'ProductsController@index');
   Route::get('/menu', 'ProductsController@index2');
   Route::get('/secmenu', 'ProductsController@index3');
   Route::get('order', 'ProductsController@order');

   Route::get('add-to-order/{id}', 'ProductsController@addToOrder');

   Route::patch('update-order', 'ProductsController@update');

   Route::delete('remove-from-order', 'ProductsController@remove');
   
   Route::get('/calories', 'PDFController@PDFgenerator');


    Route::get('/login','customerscontroller@login');
    Route::post('/logs','customerscontroller@logs');
    Route::get('/dashboard', function () {


            return view('dashboard');
        });

Route::get('/feedback','FeedbackController@feedback');

Route::post('/feedback','FeedbackController@saveFeedback');
