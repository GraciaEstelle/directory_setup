<?php

$database = require "database.php";

if(isset($_POST['naam'])) {
    //$newProduct = $database->createNew();
    $product = $database->selectAll('p.naam, p.prijs, p.btw','product p','1');
    $key = $product;
    foreach ($key as $value) {
        foreach ($value as $childValue) {
            echo $childValue."<br/>";
        }
    }
}






