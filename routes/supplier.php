<?php

Route::namespace('Supplier')->group(function () {
    Route::get('dashboard', 'SupplierController@dashboard');
    Route::get('add-product', 'SupplierController@add_product');
    Route::get('product-list', 'SupplierController@product_list');
    Route::match(['get', 'post'], 'setting', 'SupplierController@setting')->name('setting');
    //Route::get('company/status/{status}/{id}', 'CompanyController@update_status');
});
