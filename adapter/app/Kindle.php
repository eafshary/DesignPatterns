<?php

namespace App;

/**
 * this is the adapted class. In production code, this could be a class from another package, some vendor code.
 * Notice that it uses another naming scheme and the implementation does something similar but in another way
 */
class Kindle implements EBookInterface
{
    private int $page = 1;
    private int $totalPages = 100;

    public function pressNext(): void
    {
        $this->page++;
    }

    public function unlock(): void
    {
    }

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
