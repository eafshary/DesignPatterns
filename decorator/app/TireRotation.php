<?php

namespace App;

class TireRotation extends CarServiceDecorator
{

    public function getPrice(): int
    {
        return $this->carService->getPrice() + 50;
    }

    public function getDescription(): string
    {
        return $this->carService->getDescription() . 'tire rotation';
    }
}
