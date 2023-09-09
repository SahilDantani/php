<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inbuilt_fun.php" method="post">
        <label for="x_value">x:</label><br>
        <input type="text" name="x"><br>
        <label for="y_value">y:</label><br>
        <input type="text" name="y"><br>
        <label for="z_value">z:</label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="total"><br>
        
    </form>
</body>
</html>

<?php
    $x=$_POST["x"];
    $y=$_POST["y"];
    $z=$_POST["z"];

    $total=null;

    // $total=abs($x);
    // $total=round($x,2);
    // $total=floor($x);
    // $total=ceil($x);
    // $total=sqrt($x);
    // $total=pow($x,$y);
    // $total=max($x,$y,$z);
    // $total=min($x,$y,$z);
    // $total=rand(1,6);
    $total=pi();

    echo $total;    
?>