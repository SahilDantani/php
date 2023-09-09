<?php
    include("mysql_db.php");

    $username = "abcde";
    $password = "12312345";
    $hash=password_hash($password,PASSWORD_DEFAULT);

    
    $sql="INSERT INTO users (user,password)
          VALUES('$username','$hash')";
    
    try{
        mysqli_query($conn,$sql);
        echo"User is now registered";
    }catch(mysqli_sql_exception){
        echo"could not register user";
    }

    mysqli_close($conn);
?>
