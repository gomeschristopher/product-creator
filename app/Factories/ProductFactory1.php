<?php

namespace App\Factories;

use App\Contracts\ProductFactoryInterface;
use App\Contracts\ProductAInterface;
use App\Contracts\ProductBInterface;
use App\Models\ProductA1;
use App\Models\ProductB1;

class ProductFactory1 implements ProductFactoryInterface
{
    public function createProductA(): ProductAInterface
    {
        return new ProductA1();
    }

    public function createProductB(): ProductBInterface
    {
        return new ProductB1();
    }
}