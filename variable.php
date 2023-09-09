<?php
    // string
    $name="Sahil";
    $food="burger";
    $email="fake@gmail.com";

    // integers
    $age=21;
    $users=2;
    $quantity=3;

    // float
    $gpa=2.5;
    $price=4.99;
    $tax_price=5.1;

    // bool
    $employed=true;
    $online=false;
    $for_sale=true;

    // 
    $total=null; //null indicate no value
    $total=$quantity*$price;


    echo"My name is {$name}<br>";
    echo"I like {$food}<br>";
    echo"My mail id is {$email}<br>";

    echo"I am {$age} years old<br>";
    echo"There are {$users} users online<br>";
    echo"You would like to buy {$quantity} items<br>";

    echo"Your gpa is: {$gpa}<br>";
    echo"Your burger is \${$price}<br>";
    echo"The sales tax_rate is: {$tax_rate}";

    echo"Is employed?:{$employed}<br>";
    echo"Online status:{$online}<br>";
    echo"is For fale?:{$for_sale}<br>";

    // display 2 var
    echo"You have ordered {$quantity}x{$food}s<br>";
    echo"Your total is: \${$total}<br>";
?>