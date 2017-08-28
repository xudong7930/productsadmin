<?php

namespace xudong7930\productsadmin\Facades;

use Illuminate\Support\Facades\Facade;

class productsadmin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'products_admin';
    }
}
