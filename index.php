<?php

require_once "vendor/autoload.php";

use Composite\SimpleProduct;
use Composite\CompositeProduct;

// Uso de productos simples
$product1 = new SimpleProduct("Laptop", 1000);
$product2 = new SimpleProduct("Mouse", 50);

// Crear un carrito de productos
$cart = new CompositeProduct("Combo Electrónica");
$cart->add($product1);
$cart->add($product2);

// Mega carrito
$megaCarrito =  new CompositeProduct("Mega Carrito de Electrónica");
$megaCarrito->add($cart);
$megaCarrito->add(new SimpleProduct ("Laptop Pro", 115000));

echo "Simple: " . $product1->getName() . ", Precio total: " . $product1->getPrice() . "\n";
echo "Simple: " . $product2->getName() . ", Precio total: " . $product2->getPrice() . "\n";
echo "Carrito: " . $cart->getName() . ", Precio total: " . $cart->getPrice() . "\n";
echo "Mega Carrito: " . $megaCarrito->getName() . ", Precio total: " . $megaCarrito->getPrice() . "\n";
