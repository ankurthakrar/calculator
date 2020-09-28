<?php

Route::get('/', 'ankurthakrar\Calculator\CalculatorController@index');

Route::get('add/{a}/{b}', 'ankurthakrar\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'ankurthakrar\Calculator\CalculatorController@subtract');
Route::get('multiply/{a}/{b}', 'ankurthakrar\Calculator\CalculatorController@multiply');
Route::get('divide/{a}/{b}', 'ankurthakrar\Calculator\CalculatorController@divide');