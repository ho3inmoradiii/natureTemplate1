<?php


Route::get('/books','BooksController@index');
Route::get('/books/{id}','BooksController@show');
