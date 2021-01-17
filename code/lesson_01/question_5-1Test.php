<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
	public function testSay() {
		$fizzbuzz = new FizzBuzz;
		$this->assertEquals("fizzBuzz", $fizzbuzz->say(30));
		$this->assertEquals("fizz", $fizzbuzz->say(15));
		$this->assertEquals("fizzBuzz", $fizzbuzz->say(45));
	}
}
?>
