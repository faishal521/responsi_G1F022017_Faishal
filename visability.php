<?php

require_once "data/Product.php";

$product = new Product("Xiaomi", 20000);

// tampilkan product get name
// tampilkan product get price

$dummy = new ProductDummy("Suite", 1000);
$dummy->info();