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
use Illuminate\Http\Request;


Route::get('/', function () {
	if(Auth::check()){
		Auth::logout();
		return view('welcome');

	}else{
    	return view('welcome');
	}
});

Route::get('/mensajes', function () {
    return view('mensajes');
});
Route::get('/perfil', function () {
    return view('perfil');
});


Route::post('/perfil', function (Request $request) {

    $user = \App\User::find(Auth::user()->id);

    $user->name = $request->input('name');
    $user->last_name = $request->input('last_name');
    $user->profile_pic = $request->input('profile_pic');
    $user->work = $request->input('work');
    $user->birthday = $request->input('birthday');
    $user->location = $request->input('location');
    $user->born_in = $request->input('born_in');
    $user->studies = $request->input('studies');
    $user->music = $request->input('music');
    $user->hobbies = $request->input('hobbies');
    $user->phone = $request->input('phone');

    $user->save();

    return view('perfil');
});


Route::get('/buscar', function () {
    return view('buscar');
});
Route::get('/notificaciones', function () {
    return view('notificaciones');
});
Route::get('/misviajes', function () {
    return view('misViajesMobile');
});

Route::get('/timeline', function () {
    return view('timeline');
});

Route::get('/llevar', function () {
    return view('llevar');
});


Route::post('/home', function (Request $request) {

    $user = \App\User::find(Auth::user()->id);

    $user->name = $request->input('name');
    $user->last_name = $request->input('last_name');
    $user->profile_pic = $request->input('profile_pic');
    $user->work = $request->input('work');
    $user->birthday = $request->input('birthday');
    $user->location = $request->input('location');
    $user->born_in = $request->input('born_in');
    $user->studies = $request->input('studies');
    $user->music = $request->input('music');
    $user->hobbies = $request->input('hobbies');
    $user->phone = $request->input('phone');

    $user->save();

    return view('/home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
