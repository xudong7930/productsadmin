<?php

Route::get('/products', function(){
    $products = DB::select('select * from products');
    return view('productadmin::products')->with([
        'products' => $products
    ]);
});