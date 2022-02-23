<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        require_once('Ape.php');
        require_once('Frog.php');
        require_once('animal.php');
        
        
        $sheep =  new Animal("shaun");
        echo "Name: " . $sheep->name . "<br>"; // "shaun"
        echo "legs: " . $sheep->legs . "<br>"; // 4
        echo "cold blooded: " . $sheep->cold_blooded . "<br>"; // "no"
        echo "<br>";

        $kodok = new Frog("buduk");
        echo "Name: " . $kodok->name . "<br>"; // "shaun"
        echo "legs: " . $kodok->legs . "<br>"; // 4
        echo "cold blooded: " . $kodok->cold_blooded . "<br>"; // "no"
        echo "Jump: " .  $kodok->jump() . "<br>";
        echo "<br>";

        $sungokong = new Ape("kera sakti");
        echo "Name: " . $sungokong->name . "<br>"; // "shaun"
        echo "legs: " . $sungokong->legs . "<br>"; // 4
        echo "cold blooded: " . $sungokong->cold_blooded . "<br>"; // "no"
        echo "Yell: " .  $sungokong->yell() . "<br>";
        echo "<br>";
    ?>
</body>
</html>