<?php

namespace App;

abstract class HomeChecker
{

    public function __construct(private ?HomeChecker $successor = null)
    {
    }

    final public function handle(HomeStatus $home)
    {
        $result = $this->check($home);

        if ($result === null && $this->successor) {
            $this->successor->handle($home);
        }
    }

    abstract protected function check(HomeStatus $home);
}
