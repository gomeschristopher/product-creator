<?php

use App\Contracts\ProductFactoryInterface;
use App\Factories\ProductFactory1;
use App\Factories\ProductFactory2;

require __DIR__. '/vendor/autoload.php';

function clientCode(ProductFactoryInterface $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "\n";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}


echo "Client: Testing client code with the first factory type:\n";
clientCode(new ProductFactory1());

echo "\n";

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new ProductFactory2());