<?php
namespace Tests\Unit;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testAbleToCreateObject()
    {
        $this->assertInstanceOf(FizzBuzz::class, $this->fizzBuzz);
    }

    public function testShouldSayOneWhenOneIsAsked()
    {
        $this->assertEquals('1', $this->fizzBuzz->say(1));
    }

    public function testShouldSayTwoWhenTwoIsAsked()
    {
        $this->assertEquals('2', $this->fizzBuzz->say(2));
    }

    public function testShouldSayFizzWhenThreeIsAsked()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->say(3));
        $this->assertEquals('Fizz', $this->fizzBuzz->say(6));
    }
}