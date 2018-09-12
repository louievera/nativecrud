<?php
require('Product.php');

$prod = new Product;

$data = json_encode(["data"=> $prod->getProductList()]);

echo $data;
?>