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

Route::get('/', 'CommentsController@index');
Route::resource('comments', 'CommentsController');

;

/*

ディフォルト↓↓↓
Route::get('/', function () {
    return view('welcome');

上記
Route::resource('comments', 'CommentsController');
の省略型
↓↓↓

//メッセージの個別詳細ページ
Route::get('messages/{id}', 'MessagesController@show')->name('messages.show');

//メッセージの新規登録を処理（新規登録画面を表示するものではない）
Route::post('messages', 'MessagesController@store')->name('messages.store');

//メッセージの更新処理（編集画面を表示するものではない）
Route::put('messages/{id}', 'MessagesController@update')->name('messages.update');

//メッセージを削除
Route::delete('messages/{id}', 'MessagesController@destroy')->name('messages.destroy');



// index: showの補助ページ
Route::get('messages', 'MessagesController@index')->name('messages.index');

// create: 新規作成用のフォームページ。postのアクションを起こすために何らかのデータを渡す必要がある。そのためのフォーム
Route::get('messages/create', 'MessagesController@create')->name('messages.create');

// edit: 更新用のフォームページ（update）
Route::get('messages/{id}', 'MessagesController@edit')->name('messages.edit'); 

});

*/

