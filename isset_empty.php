<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <label for="u_name">username:</label><br>
        <input type="text" name="username"><br>
        <label for="password">password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>

<?php
    // foreach($_POST as $key=>$value){
    //     echo"{$key}={$value}<br>";
    // }
    if(isset($_POST["login"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if(empty($username)){
            echo"Enter u_name";
        }elseif(empty($password)){
            echo"Enter password";
        }else{
            echo"Welcome";
        }
    }
?>