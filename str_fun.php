<?php
    $name = "Sahil Dantani";
    $for_trim="    a     ";
    $f_name="Sahil";
    $num="234 234 123";
    $arr=array("My","Name");

    $lower = strtolower($f_name);
    $upper = strtoupper($name);
    $trim =trim($for_trim);
    $pad = str_pad($f_name,13," dantani");
    $replace = str_replace(" ","-",$num);
    $rev = strrev($num);
    $shuffle =str_shuffle($num);
    $cmr = strcmp($name,$f_name);
    $len =strlen($name);
    $pos = strpos($name," ");
    $sub =substr($name,0,6);
    $explod =explode(" ",$name);
    $implod = implode(" ",$arr);

    echo $lower."<br>";
    echo $upper."<br>";
    echo $trim."<br>";
    echo $pad."<br>";
    echo $replace ."<br>";
    echo $rev."<br>";
    echo $shuffle."<br>";
    echo $cmr."<br>";
    echo $len."<br>";
    echo $pos."<br>";
    echo $sub."<br>";
    echo $implod."<br>";
    foreach($explod as $exp){
        echo $exp;
    }
?>