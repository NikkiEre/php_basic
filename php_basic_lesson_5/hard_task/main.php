<?php

include "product.php";
include "cart.php";

$product_1 = new Product("mouse", 10);
$product_2 = new Product("keyboard", 20);
$product_3 = new Product("car", 15000);

$product_1->setComponent($product_2);
$product_2->setComponent($product_1);

$cart = new Cart();

$cart->setProducts_list($product_1);
$cart->setProducts_list($product_3);

print_r($cart->getCostCart());
