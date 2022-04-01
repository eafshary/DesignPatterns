<?php

namespace App;

class Lights extends HomeChecker
{

    protected function check(HomeStatus $homeStatus)
    {
        if (! $homeStatus->lightsOn) {
            echo "the lights are still on\n";
            return false;
        }

        echo "the lights are off\n";

        return null;
    }
}
