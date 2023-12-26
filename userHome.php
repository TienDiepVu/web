<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        session_start();
        if (isset($_SESSION["userId"])) {
            echo"Ban da dang nap voi ten la " . $_SESSION['userId'] . "<br>";
            echo "Click here to <a href='userLogout.php'>Logout</a>";
        }
        else {
            echo "Ban chua dang nhap";
        }
    ?>
    <ul>
        <li>
            <div>MENU</div>
        </li>
        <li><a href="2-login.php">Đăng nhập</a></li>
        <li><a href="">Xem danh sách chuyến bay</a></li>
        <li><a href="">Mua vé</a></li>
        <li><a href="">Thêm chuyến bay</a></li>
    </ul>
</body>

</html>