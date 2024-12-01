<?php 

require_once __DIR__ . "/autoload.php";

$categories = ['Makes Work Fun', 'Team Player', 'Culture Champion', 'Difference Maker'];

foreach($categories as $categoryData) {
    $category->insertCategory($categoryData);
}

