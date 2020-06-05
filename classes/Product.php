<?php 

class Product {
    // Properties
    public $name;
    public $category;
    public $price;

    // Constructor
    function __construct($_name, $_category, $_price) {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
    }

    public function printInfos() {
        return $this->name . ' ' . '€' . $this->price;
    }
}
