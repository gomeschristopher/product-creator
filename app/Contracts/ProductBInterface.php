<?php

namespace App\Contracts;

interface ProductBInterface
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(ProductAInterface $collaborator): string;
}