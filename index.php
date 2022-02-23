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
        require 'animal.php';
        $sheep =  new Animal("shaun");
        echo $sheep->name; // "shaun"
        echo $sheep->legs; // 4
        echo $sheep->cold_blooded; // "no"
    ?>
</body>
</html>