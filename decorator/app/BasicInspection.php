<?php

namespace App;

class BasicInspection implements CarServiceInterface
{

    public function getPrice(): int
    {
        return 20;
    }

    public function getDescription(): string
    {
        return 'basic service';
    }
}
