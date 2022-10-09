<?php
    include "../app/ProductsController.php";
    include "../app/BrandsController.php";
    $productos = new ProductsController;
    $products = $productos->info();
    // var_dump($_SESSION);
    // var_dump($products);
    // var_dump($array);
?>