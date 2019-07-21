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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/category', 'AdminController@category')->name('admin.category');
Route::get('/admin/category/add', 'AdminController@add')->name('add.category');
Route::post('/admin/category/add', 'AdminController@addSave')->name('addsave.category');
Route::get('/admin/books', 'AdminController@index')->name('index.books');
Route::get('/admin/books/add', 'BooksController@add')->name('admin.books.add');
Route::get('/admin/books/{{books}}', 'BooksController@show')->name('admin.books.show');
Route::post('/admin/books','BooksController@addSave')->name('addsave.books');
Route::get('/book/{id}','HomeController@show')->name('book.id');
Route::get('/book/{id}','HomeController@show')->name('book.id');
