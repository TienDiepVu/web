<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function display_image_list($imagelist , $img_width , $img_height)
        {
            echo "<h1>Function</h1>";
            foreach($imagelist as $item)
            {
                echo "<img src='image/$item' width = $img_width height =$img_height alt= '$item'>";
            }
            echo"<br>";
        }
        $items = array ('../img/item1 (1).png','../img/item1 (2).png','../img/item1 (3).png','../img/item1 (4).png');
        display_image_list($items, '50px', '50px');

        $items = array ('../img/item1 (4).png', '../img/item1 (5).png');
        display_image_list($items, '100px' , '100px');
        display_image_list($items, '150px' , '150px');
    ?>
</body>
</html>