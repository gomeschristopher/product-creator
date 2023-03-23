<?php

namespace App\Models;

use App\Contracts\ProductAInterface;

class ProductA2 implements ProductAInterface
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}