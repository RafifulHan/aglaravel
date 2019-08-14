<?php

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/date', function(){
    $date = DB::table('users')->paginate(10);
    return view('date', ['dates' => $date]);
})->name('date');
Route::get('/delete/{id}', 'CrudController@delete')->name('delete');
Route::post('/search', 'CrudController@search')->name('search');
Route::get('/register', function(){
    return view('register');
})->name('register');
Route::post('/register_post', 'CrudController@register_post')->name('register_post');
Route::get('/update/{id}', 'CrudController@update')->name('update');
Route::post('/update_post', 'CrudController@update_post')->name('update_post');
Route::view('/login', 'login')->name('login');
Route::post('/login_post', 'CrudController@login_post')->name('login_post');
Route::view('/admin', 'admin')->name('admin');