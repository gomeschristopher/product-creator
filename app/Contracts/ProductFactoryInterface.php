<?php

namespace App\Contracts;

interface ProductFactoryInterface
{
    public function createProductA(): ProductAInterface;

    public function createProductB(): ProductBInterface;
}