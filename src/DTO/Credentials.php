<?php

namespace App\DTO;

class Credentials
{
    public function __construct(
        public string $username,
        public string $password,
    ) {}
}
