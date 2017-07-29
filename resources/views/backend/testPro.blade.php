<?php
    $categories = new \App\categories();
    foreach($categories->get() as $category){
        echo $category->name;
    }
?>