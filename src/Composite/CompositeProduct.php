<?php

namespace Composite;

class CompositeProduct extends ProductComponent {

  private $products = [];

  public function __construct(private $name) {}

  public function add(ProductComponent $product) {
    $this->products[] = $product;
  }

  public function remove(ProductComponent $product) {
    $index = array_search($product, $this->products);

    if ($index !== false) {
      unset($this->products[$index]);
    }
  }

  public function getPrice() {
    $total = 0;

    foreach ($this->products as $product) {
      $total += $product->getPrice();
    }

    return $total;
  }

  public function getName() {
    return $this->name;
  }
}