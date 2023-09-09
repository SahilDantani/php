<?php
    $password="abc1234";
    $hash = password_hash($password,PASSWORD_DEFAULT);
    if(password_verify("abc123",$hash)){
        echo"you are logged in!";
    }else{
        echo"incorrect password!";
    }
?>