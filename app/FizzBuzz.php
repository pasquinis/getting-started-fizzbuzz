<?php
namespace App;

class FizzBuzz
{
    private array $rules;

    public function __construct()
    {
        $this->rules = [
            15 => 'FizzBuzz',
            5 => 'Buzz',
            3 => 'Fizz',
        ];
    }
    public function say(int $number): string
    {
        foreach ($this->rules as $key => $word) {
            if ($number % $key === 0) {
                return $word;
            }
        }

        return (string) $number;
    }
}