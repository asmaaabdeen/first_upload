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
    return view('welcome');
});
Route::get('/payment', 'BillingController@paymentMethod');
Route::post('/','BillingController@savePayment');
Route::get('/register/submit','customerscontroller@register');
 Route::post('/register','customerscontroller@store');
 
 Route::get('/menu', function () {
    return view('menu');
});
Route::get('/contacts', function () {
    return view('contacts');
});




Route::get('/updates', function () {
//    return 1234;
    
    return view('customerfolder/updates');
});
    // Route::get('/updates','updatescontroller@update'); 
         
    
    //Route::get('/profile.show','profileController@show'); 

    Route::resource('/profile', 'profileController') ;

   //make order
   // http://localhost:8000
   
   Route::get('/', 'ProductsController@index');

   Route::get('order', 'ProductsController@order');
   
   Route::get('add-to-order/{id}', 'ProductsController@addToOrder');
   
   Route::patch('update-order', 'ProductsController@update');
   
   Route::delete('remove-from-order', 'ProductsController@remove');