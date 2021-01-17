<?php
    class Cart {
        private $items;

        public function __construct() {
            $this->items = array();
        }

        public function addItem($item) {
            array_push($this->items, $item);
        }

        public function showTotalPrice() {
            $price = 0;
            foreach($this->items as $item) {
                $price += $item->getPrice();
            }
            echo "total price is " . $price . PHP_EOL;
        }
    }

    class Item {
        private $name;
        private $price;

        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function getPrice() {
            return $this->price;
        }
        public function setPrice($price) {
            $this->price = $price;
        }
    }

    // main
    $item1 = new Item();
    $item1->setName("Apple");
    $item1->setPrice(200);

    $item2 = new Item();
    $item2->setName("Banana");
    $item2->setPrice(250);

    $cart = new Cart();
    $cart->addItem($item1);
    $cart->addItem($item2);
    $cart->showTotalPrice();
?>
