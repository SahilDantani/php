<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">Taco<br><br><br>

        <input type="checkbox" name="food[]" value="Banana">Banana<br>
        <input type="checkbox" name="food[]" value="Mango">Mango<br>
        <input type="checkbox" name="food[]" value="kiwi">kiwi<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo"You selected Pizza<br>";
        }
        if(isset($_POST["hamburger"])){
            echo"You selected Hamburger<br>";
        }
        if(isset($_POST["hotdog"])){
            echo"You selected Hotdog<br>";
        }
        if(isset($_POST["taco"])){
            echo"You selected taco<br>";
        }
        if(empty($_POST["pizza"])){
            echo"You do not selected Pizza<br>";
        }
        if(empty($_POST["hamburger"])){
            echo"You do not selected Hamburger<br>";
        }
        if(empty($_POST["hotdog"])){
            echo"You do not selected Hotdog<br>";
        }
        if(empty($_POST["taco"])){
            echo"You do not selected taco<br>";
        }

        $foods = $_POST["food"];
        foreach($foods as $food){
            echo $food."<br>";
        }
    }
?>