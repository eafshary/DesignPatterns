<?php

namespace App;

interface EBookInterface
{

    public function unlock(): void;

    public function pressNext(): void;

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array;
}
