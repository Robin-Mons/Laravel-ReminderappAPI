<?php

use Illuminate\Http\Request;

Route::get('getReminders', 'ReminderController@getReminders');
Route::get('getReminderByID/{id}', 'ReminderController@getReminderByID');
Route::post('addReminder', 'ReminderController@addReminder');
Route::post('editReminderByID/{id}', 'ReminderController@editReminderByID');
Route::delete('deleteReminderByID/{id}', 'ReminderController@deleteReminderByID');
