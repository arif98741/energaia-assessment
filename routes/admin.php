<?php

Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('received_products', 'AdminController@received_products');
    Route::match(['get', 'post'], 'setting', 'AdminController@setting')->name('setting');
    //Route::get('company/status/{status}/{id}', 'CompanyController@update_status');
});