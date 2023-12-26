<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $height = $_GET["height"];
    $weight = $_GET["weight"];
    if ($_GET["sex"] == "men" and $height > 1.6 and $weight > 50) {
        echo "Đạt";
    } elseif ($_GET["sex"] == "women" and $height > 1.5 and $weight > 40 and $weight < 70) {
        echo "Đạt";
    }
    else
    {
        echo "Loại";
    }

    ?>
</body>

</html>