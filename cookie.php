<?php
    setcookie("fav_food","pizza",time()+(86400 * 2),"/");
    setcookie("fav_drink","coffee",time()+(86400 * 3),"/");
    setcookie("fav_dessert","ice cream",time()+(86400 * 4),"/");

    /* to delete
        setcookie("fav_food","pizza",time()-0,"/");
    */

    /*to show each key=>value pair */
    foreach($_COOKIE as $key=>$value){
        echo"{$key} = {$value}<br>";
    }

    //check any particular cookie
    if(isset($_COOKIE["fav_food"])){
        echo"buy some {$_COOKIE["fav_food"]}";
    }else{
        echo"i dont know your fav food";
    }
?>