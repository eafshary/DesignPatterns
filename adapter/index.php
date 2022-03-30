<?php
use App\EBookAdapter;
use App\Kindle;

include(__DIR__ . '/vendor/autoload.php');

$book = new EBookAdapter(new Kindle());

echo $book->open();
echo $book->turnPage();
echo $book->turnPage();
echo $book->getPage();
