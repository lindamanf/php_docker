<?php
class FizzBuzz {
	public function say($value) {
	  if (($value % 15) === 0) {
	    return "fizzBuzz";
	  } else if (($value % 3) === 0) {
	    return "fizz";
	  } else if (($value % 5) === 0) {
	    return "buzz";
	  } else {
	    return $value;
	  }
	}
}
?>
