<?php 
include_once __DIR__ . '/Product.php';

class Manifacturer extends Product {
    // Properties
    public $brand;
    public $shippingFrom;

    // Constructor
    function __construct($_name, $_category, $_price, $_brand, $_shippingFrom) {
        parent::__construct($_name, $_category, $_price);
        $this->brand = $_brand;
        $this->shippingFrom = $_shippingFrom;
    }

    // Methods
    public function manifacturerInfos() {
        return "{$this->printInfos()} <br>
        Produttore: $this->brand <br>
        Spedito da: $this->shippingFrom";
    }
}

// Instances
$manifacturer1 = new Manifacturer('Tagliaerba', 'Giardinaggio', 300, 'Boolectronics Inc.', 'Milano');

$manifacturer2 = new Manifacturer('Smartphone', 'Elettronica', 790, 'Boolectronics Inc.', 'Milano');
