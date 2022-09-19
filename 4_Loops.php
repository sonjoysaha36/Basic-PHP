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
    //while loop 
    $languages = array("Python", "C++", "PHP", "NodeJs");
    $a =0;
    while ($a < count($languages)) {
        echo "<br>The name of Language is :" . $languages[$a];
        $a++;
    }
    echo "<br>";

    $i = 0;
    //for loop
    for ($i=0; $i < 10; $i++) { 
        echo "<br>The Value is :". $i;
        
    }
    echo "<br>";

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ". $value ;
        
    }
    ?>
</body>
</html>