<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loops.php" method="post">
        <label for="count">Enter a number to count upto:</label>
        <input type="text" name="count">
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php
    $count=$_POST["count"];
    //for
    for($i=1;$i<=$count;$i++){
        echo $i."<br>";
    }
    //while
    while($count>0){
        echo $count."<br>";
        $count--;
    }
?>