<?php
namespace App;

class FizzBuzz
{
    public function say(int $number): string
    {
        if ($number % 3 === 0) {
            return 'Fizz';
        }

        return (string) $number;
    }
}