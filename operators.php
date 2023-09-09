<?php
    // Arithmetic

    $x=10;
    $y=2;
    $z=null;

    // $z=$x+$y;
    // $z=$x-$y;
    // $z=$x*$y;
    // $z=$x/$y;
    // $z=$x%$y;
    $z=$x**$y;
    echo $z; 

    // increment/decrement 

    $counter=0;
    // $counter++;
    // $counter--;
    // $counter-=3;
    $counter+=3;
    echo $counter;

    // Operator Precedence
    $total=1+2-3*4/5**6;
    echo $total;
?>