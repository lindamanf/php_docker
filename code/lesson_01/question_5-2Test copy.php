<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testIsAdult() {
		$user1 = new User(19);
		$this->assertFalse($user1->isAdult());
		$user1 = new User(20);
		$this->assertTrue($user2->isAdult());
	}
}
?>
