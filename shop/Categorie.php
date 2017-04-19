<?php

$database = require "database.php";

$category = $database->selectAll('c.id','category c', 'c.id');

$key = $category;
foreach ($key as $value) {
    foreach ($value as $childValue) {
        echo "<option>".$childValue."</option>";
    }
}

