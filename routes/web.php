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

/*Route::group(['middleware' => ['web']], function(){
	Route::get('/login', ['as' => 'login', 'uses'=>'AuthController@login']);
	Route::post('/handlelogin', ['as' =>'handlelogin', 'uses' => 'AuthController@handlelogin']);
	Route::get('/Home', ['middleware'=> 'auth', 'as' => 'Home','uses'=> 'UsersController@Home']);
    Route::get('/user_home', ['middleware'=> 'auth', 'as' => 'user_home','uses'=> 'UsersController@user_home']);
    
	Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::resource('users', 'UsersController', ['only' => ['create', 'store']]);

});






Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');
Route::get('uploadedfile', 'UploadFileController@showUploadFile');*/
Auth::routes();

Route::get('/home', [ 'as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/Main_home', [ 'as' => 'Main_home', 'uses' => 'MainHomeController@main']);
Route::get('rentals', ['as' => 'rentals', 'uses' => 'OurServicesController@rentals']);
Route::get('guests', ['as' => 'guests', 'uses' => 'OurServicesController@guests']);
Route::get('meetings', ['as' => 'meetings', 'uses' => 'OurServicesController@meetings']);
Route::get('recreations', ['as' => 'recreations', 'uses' => 'OurServicesController@recreations']);


//payPal code
Route::group(['middleware' => ['web']], function () {

    Route::get('payPremium', ['as'=>'payPremium','uses'=>'PaypalController@payPremium']);

    Route::post('getCheckout', ['as'=>'getCheckout','uses'=>'PaypalController@getCheckout']);

    Route::get('getDone', ['as'=>'getDone','uses'=>'PaypalController@getDone']);

    Route::get('getCancel', ['as'=>'getCancel','uses'=>'PaypalController@getCancel']);

});


 