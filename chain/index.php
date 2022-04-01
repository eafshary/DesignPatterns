<?php
use App\Lights;
use App\Locks;
use App\Alarm;
use App\HomeStatus;

include(__DIR__ . '/vendor/autoload.php');

$homeStatus = new HomeStatus();

$alarm = new Alarm();
$locks = new Locks($alarm);
$lights = new Lights($locks);

$lights->handle($homeStatus);
