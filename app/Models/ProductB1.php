<?php

namespace App\Models;

use App\Contracts\ProductAInterface;
use App\Contracts\ProductBInterface;

class ProductB1 implements ProductBInterface
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B1.";
    }

    public function anotherUsefulFunctionB(ProductAInterface $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}