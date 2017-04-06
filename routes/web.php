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

Route::get('/Home', function () {
    return view('MainHome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('user/activation/{token}', 'Auth\AuthController@activateUser');
/*Route::group(['middleware' => ['web']], function () {
  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        Route::get('lenders', 'Auth\RegisterController@showLendersForm')->name('lenders');
        Route::post('lenders', 'Auth\RegisterController@registerLenders');



        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
         Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');
         Route::get('user/activation2/{token}', 'Auth\LoginController@activateUser2')->name('user.activate2');
});*/
/*
Route::post('role', 'JwtAuthenticateController@createRole');
// Route to create a new permission
Route::post('permission', 'JwtAuthenticateController@createPermission');
// Route to assign role to user
Route::post('assign-role', 'JwtAuthenticateController@assignRole');
// Route to attache permission to a role
Route::post('attach-permission', 'JwtAuthenticateController@attachPermission');

// API route group that we need to protect
Route::group(['prefix' => 'api', 'middleware' => ['ability:admin,create-users']], function()
{
    // Protected route
    Route::get('users', 'JwtAuthenticateController@index');
});

// Authentication route
Route::post('authenticate', 'JwtAuthenticateController@authenticate');
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('index');
    })->name('main');

    Route::get('/Alladmins', [
        'uses' => 'AppController@getAlladminsPage',
        'as' => 'alladmins',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Accountant', 'HR']
    ]);

    Route::get('/accountant', [
        'uses' => 'AppController@getAccountantPage',
        'as' => 'accountant',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Accountant']
    ]);

    Route::get('/HR', [
        'uses' => 'AppController@getHRPage',
        'as' => 'accountant',
        'middleware' => 'roles',
        'roles' => ['Admin', 'HR']
    ]);

    Route::get('/author/generate-article', [
        'uses' => 'AppController@getGenerateArticle',
        'as' => 'author.article',
        'middleware' => 'roles',
        'roles' => ['Accountant']
    ]);

    Route::get('/admin', [
        'uses' => 'AppController@getAdminPage',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::post('/admin/assign-roles', [
        'uses' => 'AppController@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::get('/signup', [
        'uses' => 'AuthController@getSignUpPage',
        'as' => 'signup'
    ]);

    Route::post('/signup', [
        'uses' => 'AuthController@postSignUp',
        'as' => 'signup'
    ]);

    Route::get('/signin', [
        'uses' => 'AuthController@getSignInPage',
        'as' => 'signin'
    ]);

    Route::post('/signin', [
        'uses' => 'AuthController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);
});