<?php

Route::group([
    'namespace' => 'User',
    'as' => 'user.',
    'prefix' => 'user'
], function() {
    Route::resource('/', 'UserController');
    Route::get('/datatables', 'UserController@datatables')->name('datatables');
});
?>