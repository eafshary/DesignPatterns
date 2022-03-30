<?php
use App\BeachJourney;
use App\CityJourney;

include(__DIR__ . '/vendor/autoload.php');

$cityJourney = new CityJourney();
$cityJourney->takeATrip();
var_dump($cityJourney->getThingsToDo());

$beachJourney = new BeachJourney();
$beachJourney->takeATrip();
var_dump($beachJourney->getThingsToDo());
