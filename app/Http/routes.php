<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'blogController@index');
Route::get('home', 'HomeController@index');
Route::get('home/user', 'HomeController@user');
Route::get('home/msg', 'HomeController@msg');
Route::get('home/personal', 'HomeController@personal');
Route::get('home/employments', 'HomeController@employments');
Route::get('home/educations', 'HomeController@educations');
Route::get('home/blog', 'HomeController@blog');
Route::get('home/commen', 'HomeController@commn');
Route::get('/{name}','blogController@cate');

Route::get('home/footer','HomeController@footer');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::post('user/update', 'userController@update');
Route::post('footer/update', 'aboutController@update');

Route::controller('contact','contactController');
Route::controller('about','aboutController');
Route::controller('employments','employmentController');
Route::controller('educations','educationController');
Route::controller('category','categoryController');
Route::controller('site_blog','site_blogController');
Route::controller('comment','commnController');

Route::get('/down', 'HomeController@down');
Route::any('{any}', function()
{
        return 'not found';
});
Route::when('*', 'csrf', array('post', 'put', 'delete'));
