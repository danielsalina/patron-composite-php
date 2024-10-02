<?php

class SimpleProduct {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getName() {
        return $this->name;
    }
}

class ProductCombo {
    private $products = [];

    public function addProduct(SimpleProduct $product) {
        $this->products[] = $product;
    }

    public function getTotalPrice() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}

// Uso de productos simples
$product1 = new SimpleProduct("Laptop", 1000);
$product2 = new SimpleProduct("Mouse", 50);

// Uso de productos complejos
$combo = new ProductCombo();
$combo->addProduct($product1);
$combo->addProduct($product2);

echo "Precio total del combo: " . $combo->getTotalPrice() . "\n";
echo "Precio total del product1: " . $product1->getPrice() . "\n";
