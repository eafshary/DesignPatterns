<?php

namespace App;

class Locks extends HomeChecker
{

    protected function check(HomeStatus $homeStatus)
    {
        if (! $homeStatus->locked) {
            echo "the doors are not locked\n";
            return false;
        }

        echo "the doors are locked\n";

        return null;
    }
}
