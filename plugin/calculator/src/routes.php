<?php

Route::get('add/{a}/{b}', 'Plugin\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Plugin\Calculator\CalculatorController@subtract');