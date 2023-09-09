<?php
    $temp_f =10;
    $temp_c=-14;
    $cloudy=false;
    if($temp_f>=0 && $temp_f<=30){
        echo"The weather is good<br>";
    }else{
        echo"The weather is bad<br>";
    }
    if($temp_c<0 || $temp_c>30){
        echo"The weather is bad<br>";
    }else{
        echo"The weather is good<br>";
    }
    if(!$cloudy){
        echo"It's Sunny";
    }
?>