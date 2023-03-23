<?php

namespace App\Models;

use App\Contracts\ProductAInterface;
use App\Contracts\ProductBInterface;

class ProductB2 implements ProductBInterface
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B2.";
    }

    public function anotherUsefulFunctionB(ProductAInterface $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with the ({$result})";
    }
}