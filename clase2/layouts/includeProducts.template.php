<?php
    include "../app/ProductsController.php";
    $productos = new ProductsController;
    $products = $productos->info();
    // var_dump($products);
?>