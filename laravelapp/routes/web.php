<?php

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
    Route::post('/folders/create', 'FolderController@create');

    Route::group(['middleware' => 'can:view,folder'], function() {
        Route::get('/folders/{folder}/tasks', 'TaskController@index')->name('tasks.index');

        Route::get('/folders/{folder}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
        Route::post('/folders/{folder}/tasks/create', 'TaskController@create');

        Route::get('/folders/{folder}/tasks/{task}/edit', 'TaskController@showEditForm')->name('tasks.edit');
        Route::post('/folders/{folder}/tasks/{task}/edit', 'TaskController@edit');
    });
});

//お問い合わせフォームtop
Route::get('/mailform', 'PagesController@mailform_top')->name('mailform_home');
//お問い合わせフォーム確認
Route::post('/confirm', 'PagesController@mailform_comfirm')->name("taniwaki_kakunin");

//お問合せフォーム完了
Route::post('/thanks', 'PagesController@thanks')->name("taniwaki_thanks");


Route::get('/explan/{id}', 'PagesController@hensin')->name('home');

Auth::routes();