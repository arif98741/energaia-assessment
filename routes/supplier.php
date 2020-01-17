<?php

Route::namespace('Supplier')->group(function () {
    Route::get('dashboard', 'SupplierController@dashboard');
    Route::get('add-product', 'SupplierController@add_product');
    Route::post('save-product', 'SupplierController@save_product');
    Route::get('product-list', 'SupplierController@product_list');
    Route::match(['get', 'post'], 'supply', 'SupplierController@supply');
});