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
Route::get('/', function ()
  {
    if (Auth::check()) {
      return redirect()->route('index');
    }
    return view('welcome');
  }
)->name('welcome');

Route::get('list', 'ContactController@getIndex')->name('index');

Route::get('add', function () {return view('add');} )->name('add');

Route::get('contact/{id}', 'ContactController@contactShow')->name('contact');

Route::get('contact/{id}/edit', 'ContactController@contactEdit')->name('contact.edit');

Route::post('update', 'ContactController@contactUpdate')->name('contact.update');

Route::post('create', 'ContactController@contactCreate')->name('contact.add');

Route::get('delete/{id}', 'ContactController@contactDelete')->name('contact.delete');

Auth::routes();

Route::get('user/dash', 'DashController@index')->name('dash');

Route::get('emailchange', function ()
  {
    if (Auth::check()) {
      $user = Auth::user();
      return view('auth.emailChange', ['user' => $user]);
    }
    return view('welcome');
  }
)->name('emailChange');

Route::post('emailupdate', 'UserController@emailUpdate')->name('email.update');

Route::get('namechange', function ()
  {
    if (Auth::check()) {
      $user = Auth::user();
      return view('auth.nameChange', ['user' => $user]);
    }
    return view('welcome');
  }
)->name('nameChange');

Route::post('nameupdate', 'UserController@nameUpdate')->name('name.update');

Route::get('passwordreset', function ()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('auth.passwords.passwordChange', ['user' => $user]);
        }
        return view('welcome');
    }
)->name('passwordReset');

Route::post('passwordupdate', 'UserController@passwordUpdate')->name('passwordUpdate');
