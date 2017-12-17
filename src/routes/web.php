<?php

Route::group(['prefix' => 'member', 'middleware' => ['web']], function() {
    Route::get('demo', 'Bantenprov\Member\Http\Controllers\MemberController@demo');

    Route::get('/', 'Bantenprov\Member\Http\Controllers\MemberController@index')->name('memberIndex');

    Route::get('/create', 'Bantenprov\Member\Http\Controllers\MemberController@create')->name('memberCreate');

    Route::post('/store', 'Bantenprov\Member\Http\Controllers\MemberController@store')->name('memberStore');
});
