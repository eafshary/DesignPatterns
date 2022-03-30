<?php
use App\TireRotation;
use App\OilChange;
use App\BasicInspection;

include(__DIR__ . '/vendor/autoload.php');

$carService = new BasicInspection();
$carService = new OilChange($carService);
$carService = new TireRotation($carService);

echo $carService->getPrice();
