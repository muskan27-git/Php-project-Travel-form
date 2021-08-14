<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background-color:blue;
        }
        </style>
</head>
<body>
    <?php
    $var1=45;
    $var2=56;
    echo $var1;
    echo "<br>";
    echo $var2;
    echo "<br>";

    echo var_dump(1==1);
    echo "<br>";
    echo var_dump(1!=2);

    echo $var1++;
    echo"<br>";
    echo $var1--;
    echo $var1;

    echo var_dump($var=34);
    ?>

    <div class="container">This is a container</div>

    <?php

    $languages=array('Nodejs', 'C++', 'C');

    echo $languages[0];

    $a=0;

    while($a <count($languages))
    {
        echo "The languages is: $languages[$a]";
        $a++;
    }

    ?>


</body>
</html>