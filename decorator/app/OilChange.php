<?php

namespace App;

class OilChange extends CarServiceDecorator
{

    public function getPrice(): int
    {
        return $this->carService->getPrice() + 65;
    }

    public function getDescription(): string
    {
        return $this->carService->getDescription() . 'oil change';
    }
}
