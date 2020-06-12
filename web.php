<?php
Route::group(['prefix' => 'admin'],function(){
    Route::get('admin/profile/create','Admin\ProfileController@add');
    Route::get('admin/profile/edit','Admin\ProfileController@edit');
});
