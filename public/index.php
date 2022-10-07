<?php

require __DIR__ . '/../vendor/autoload.php';

use App\FizzBuzz;

$fizzBuzz = new FizzBuzz();

foreach (range(1, 100) as $number) {
    echo '<pre>';
    echo $number . ' - ' . $fizzBuzz->say($number) . PHP_EOL;
    echo '</pre>';
}