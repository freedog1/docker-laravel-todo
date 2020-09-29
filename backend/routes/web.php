<?php

Route::get('/','CalendarController@index');
Route::post('/page','PageController@post');
Route::get('/list','ItemController@getList');
Route::get('/holiday','CalendarController@getHoliday');
Route::post('/holiday','CalendarController@postHoliday');
Route::get('/holiday/{id}','CalendarController@getHolidayId');

//gmap
Route::get('/gmap','GmapsController@view');