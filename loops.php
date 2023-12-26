<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Day:
    <select name="" id="">
        <?php 
            $day=1;
            while( $day<32)
            {
                echo "<option value=$day> $day </option>";
                $day++;
            }
        ?>
    </select>
    Thang:
    <select name="" id="">
        <?php
            $month=1;
            while( $month<13)
            {
                echo "<option value=$month> $month </option>";
                $month++;
            }
        ?>
    </select>
    Nam:
    <select name="" id="">
        <?php 
            $today = getdate();
            $curyear =$today["year"];
            $year=1900;
            while( $year<$curyear)
            {
                echo "<option value=$year> $year </option>";
                $year++;
            }
        ?>
    </select>
    

</body>

</html>