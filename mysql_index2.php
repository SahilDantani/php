<?php
    include("mysql_db.php");

    $sql="SELECT *FROM users";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo $row["id"]."<br>";
            echo $row["user"]."<br>";
            echo $row["req_date"]."<br>";
        };
    }else{
        echo"NO user found";
    }

    mysqli_close($conn);
?>