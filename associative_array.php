<?php 
    $users=array("name"=>"sahil",
                    "surname"=>"dantani");
    $users["name"]="Sahil";
    $users["Name"]="Sahil";
    $users["add"]="not allocate";
    array_pop($users);
    array_shift($users);
    $keys = array_keys($users);
    $values = array_values($users);
    $flip_array=array_flip($users);
    $reverse_array=array_reverse($users);

    

    echo count($users)."<br>";
    foreach($users as $key=>$value){
        echo"{$key}={$value} <br>";
    }
    echo"key<br>";
    foreach($keys as $key){
        echo"{$key}<br>";
    }
    echo"value<br>";
    foreach($values as $value){
        echo"{$value}<br>";
    }
    echo"flip<br>";
    foreach($flip_array as $key=>$value){
        echo"{$key}={$value}<br>";
    }
    echo"reverse<br>";
    foreach($reverse_array as $key=>$value){
        echo"{$key}=>{$value}<br>";
    }
?>