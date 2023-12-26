<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $math = $_GET["math"];
    $physical = $_GET["physical"];
    $english = $_GET["english"];
    $total = $math + $physical + $english;
    echo "Tổng điểm của bạn là : " . $total . "<br>";
    if ($total >= 22) 
    {
        echo " <li>CNTT CLC</li> <li>KHDL</li> <li>CNTT</li> <li>Địa Chất</li> <li>Môi trường</li>";
    } 
    elseif ($total >= 18) 
    {
        echo "<li>KHDL</li> <li>CNTT</li> <li>Địa Chất</li> <li>Môi trường</li>";
    } 
    elseif ($total >= 17) 
    {
        echo " <li>Địa Chất</li> <li>Môi trường</li>";
    } 
    elseif ($total >= 15) 
    {
        echo " <li>Môi trường</li>  ";
    }
    else
    {
        echo "Chúc bạn may mắn lần sau";
    }


    ?>
</body>

</html>