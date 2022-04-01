<?php

namespace App;

class Alarm extends HomeChecker
{

    protected function check(HomeStatus $homeStatus)
    {
        if (! $homeStatus->alarm) {
            echo 'the alarm has not been set';
            return false;
        }

        echo 'the alarm has been set';

        return null;
    }
}
