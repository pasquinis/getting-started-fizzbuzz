<?php
namespace Tests\Unit;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testAbleToCreateObject()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertInstanceOf(FizzBuzz::class, $fizzBuzz);
    }
}