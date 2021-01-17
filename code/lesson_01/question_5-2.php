<?php
class User {
	private $age;

  public function __construct($age) {
    $this->age = $age;
	}

  public function isAdult() {
    return ($this->age >= 20);
  }
}
?>
