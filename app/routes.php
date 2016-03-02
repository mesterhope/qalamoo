<?php
Route::get("/","HomeController@showWelcome");

Route::group(array('prefix'=>"admin"),function(){
    Route::resource('sliders', 'SlidersController');
    Route::resource('galleries', 'GalleriesController');
});
Route::controller('password', 'RemindersController');
Route::get('login', array('as' => 'login', 'uses' => 'HomeController@login_show'));
Route::post('login', array('as' => 'login', 'uses' => 'HomeController@authenticate'));
Route::get('logout', array('as' => 'logout', 'uses' => 'HomeController@logout'));
