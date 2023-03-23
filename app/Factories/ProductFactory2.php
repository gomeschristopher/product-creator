<?php

namespace App\Factories;

use App\Contracts\ProductFactoryInterface;
use App\Contracts\ProductAInterface;
use App\Contracts\ProductBInterface;
use App\Models\ProductA2;
use App\Models\ProductB2;

class ProductFactory2 implements ProductFactoryInterface
{
    public function createProductA(): ProductAInterface
    {
        return new ProductA2();
    }

    public function createProductB(): ProductBInterface
    {
        return new ProductB2();
    }
}