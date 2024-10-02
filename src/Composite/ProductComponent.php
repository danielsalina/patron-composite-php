<?php

namespace Composite;

abstract class ProductComponent {

  public function add(ProductComponent $product) {
    throw new \Exception("Operación no soportada");
  }

  public function remove(ProductComponent $product) {
    throw new \Exception("Operación no soportada");
  }

  public function getPrice() {
    throw new \Exception("Operación no soportada");
  }

  public function getName() {
    throw new \Exception("Operación no soportada");
  }

}