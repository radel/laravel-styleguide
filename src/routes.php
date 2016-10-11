<?php
Route::group(['prefix' => 'styleguide'], function () {
    Route::get('/', 'StyleGuideController@index');
    Route::get('/{componentName}', 'StyleGuideController@show');
});