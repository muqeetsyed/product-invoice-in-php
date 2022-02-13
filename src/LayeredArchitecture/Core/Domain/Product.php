<?php

namespace Raimons\LayeredArchitecture\Core\Domain;

class Product
{
    public function __construct(
        private string $productName,
        private string $productCost,
        private string $type,
        private string $flavour,
        private string $organic,
        private array $ingredients,
        private string $foodPreference,
        private string $shelfLife,
    ) {
    }
}