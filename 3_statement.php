<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age = 6;
    if($age > 18){
        echo "you can go to the party";
    }
    else if($age == 6){
        echo "You are just 6 years old";
    }
    else{
        echo " You can not go to the party";
    }


    echo "<br>";
    // Arrays in PHP
    $languages = array("Python", "C++", "PHP", "NodeJs");
    echo count($languages) . "<br>";
    echo $languages[0] . "<br>";
    ?>
</body>
</html>