### Q1. Refactor below codes. (method extraction) [15]
​
```
public function importCsv($file)
{
    $data = $this->readCsv($file);
    foreach ($data as $i => $row) {
        $year = $row[0];
        $month = $row[1];
        $userId = $row[2];
​
        $user = User::find($userId);
        if (!$user) {
            $this->appendError('User not found.');
            continue;
        }
​
        // there are many codes here
        //   .
        //   .
        //   .
​
        $importedData[] 
          = $this->getImportedData($year, $month, $user->getId());
    }
    $this->updateModel($importedData);
}
```
​
### Q2. Refactor below codes. (Replacing nesting conditions with guard clauses) [15]
​
```
/**
* Get list file names that match $pattern in $dir
*/
public function getFiles($dir, $pattern)
{
    $files = [];
    if (is_dir($dir) && $handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false) {
            if (filetype($dir.DIRECTORY_SEPARATOR.$file) == "file") {
                if (preg_match($pattern, $file)) {
                    $files[] = $file;
                }
            }
        }
    }
    return $files;
}
```
​
### Q3. Refactor below codes. (Encapsulate Field) [15]
​
​
```
class Cart {
  public $items;
​
  public function __construct() {
    $this->items = array();
  }
​
  public function showTotalPrice() {
    $price = 0;
    foreach($this->items as $item) {
      $price += $item->price;
    }
    echo "total price is " . $price . PHP_EOL;
  }
}
​
class Item {
  public $name;
  public $price;
}
​
// main
$item1 = new Item();
$item1->name = "Apple";
$item1->price = 200;
​
$item2 = new Item();
$item2->name = "Banana";
$item2->price = 250;
​
$cart = new Cart();
array_push($cart->items, $item1);
array_push($cart->items, $item2);
$cart->showTotalPrice();
```
​
### Q4. What happens when you run the code below, select the answer. (prohibited to actually execute)
​
​
#### (1) "===" operator [5]
```
<?php
$hoge = "124";
$piyo = 124;
if($hoge === $piyo) {
        echo "TRUE!" .PHP_EOL;
} else {
        echo "FALSE!" .PHP_EOL;
}
```
​
- A. It displays `TRUE!`
- B. It displays `FALSE!`
- C. Syntax error
- D. It throws exception.
​
#### (2) quote string [5]
​
```
$name = "Tom";
$string = "Hello World, $name!";
echo $string . PHP_EOL;
```
​
- A. It displays `Hello World, $name!`
- B. It displays `Hello World, Tom!`
- C. It displays `Hello World, !`
- D. It throws exception.
​
### Q5. Make unit test case that is enough to keep quality.
​
### (1) FizzBuzz class [5]
```
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
```
​
### (2) User class [5]
```
class User {
  private $age;
  public function __construct($age) {
    $this->age = $age;
  }
  public function isAdult() {
    return ($this->age >= 20);
  }
}
```
​
### (3) Stack class [15]
```
class Stack {
  private $stack;
  public function __construct() {
    $this->stack = array();
  }
  public function size() {
    return count($this->stack);
  }
  public function push($v) {
    array_push($this->stack, $v);
  }
  public function pop() {
    if($this->size() == 0) {
      throw new Exception("empty");
    }
    return array_pop($this->stack);
  }
}
```
