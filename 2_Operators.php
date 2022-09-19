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
    $var1 = 5;
    $var2 = 2;
    echo "<br>";
    echo "The value of var1 + var2 is ";
    echo $var1 + $var2;
    echo "<br> The value of var1 - var2 is ";
    echo $var1 - $var2;
    echo "<br> The value of var1 * var2 is ";
    echo $var1 * $var2;
    echo "<br> The value of var1 / var2 is ";
    echo $var1 / $var2;

    echo "<br>";
    $var3 = 100;
    $var4 = $var3;
    echo "The value is :" . $var4 ."<br>";

    $var4 -=10;
    echo "The new value is :" . $var4 . "<br>";

    //Comparison Operators
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1==4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    // Increment / Decrement
    $var = 10;
    echo $var++;
    echo "<br>";
    echo $var;
    echo "<br>";
    $var5 = 10;
    echo $var5--;
    echo "<br>";
    echo $var5;
    ?>
</body>
</html>