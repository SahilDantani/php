<?php
    $foods = array("apple","orange","banana","coconut");

    $foods[2]="mango";
    array_push($foods,"watermelon","pineapple","strawberry");
    array_pop($foods);
    array_shift($foods);
    $reverse_array=array_reverse($foods);
    echo count($foods);

    echo "array:<br>";
    foreach($foods as $food){
        echo $food . "<br>";
    }
    echo "r_array:<br>";
    foreach($reverse_array as $r_array){
        echo $r_array."<br>";
    }
?>