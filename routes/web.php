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

Route::get('s3Bucket', 'S3BucketController@index');
Route::get('email-test', function(){
  
    $details['email'] = 'rajeshgoud6785@gmail.com';
  	for($i=0;$i<150;$i++){
    dispatch(new App\Jobs\SendEmailJob($details));
  	}
    dd('done');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
