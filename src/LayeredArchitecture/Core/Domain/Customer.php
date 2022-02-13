<?php

namespace Raimons\LayeredArchitecture\Core\Domain;

class Customer
{
    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public string $address
    ) {
    }
}