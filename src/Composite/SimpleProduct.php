<?php

namespace Composite;

class SimpleProduct extends ProductComponent {

  public function __construct(private $name, private $price) {}

  public function getPrice() {
    return $this->price;
  }

  public function getName() {
    return $this->name;
  }
}