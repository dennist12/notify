<?php

Route::group(['namespace' => 'Notify\Http\Controller',
    'middleware' => ['web', 'auth']], function () {
        Route::get('notifications/', 'NotifyController@index');
        Route::post('notification/', 'NotifyController@markRead');
        Route::post('notification/read-all', 'NotifyController@markAllRead');
        Route::post('notification-count', 'NotifyController@countNotifications');
});