<?php

namespace App;

abstract class CarServiceDecorator implements CarServiceInterface
{

    public function __construct(protected CarServiceInterface $carService)
    {
    }
}
