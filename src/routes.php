<?php

Route::get('/products', function(){
    $products = DB::select('select * from products');
    
    return view('productsadmin::products')->with([
        'products' => $products
    ]);
});