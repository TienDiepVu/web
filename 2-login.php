<?php
    header("Content-Type: text/html; charset = UTF-8");
    if (isset($_POST["dangnhap"])) {
        require 'connect.php';
        $userId = $_POST['txtUsername'];
        $pasword = $_POST['txtPassword'];
        $sql = "SELECT userId, password FROM users WHERE userId ='$userId'";
        $result = mysqli_query($conn, $sql);
        if ($result -> num_rows == 0) {
            echo "Ten dang nhap nay khong ton tai. Vui long kiem tra lai. <a href='javascript: history.go(-1)'>Tro lai</a>";
            exit;
        }
        $row = $result -> fetch_assoc();
        if ($pasword != $row["password"]) {
            echo"Mat khau khong dung. Vui long nhap lai. <a href='javascript: history.go(-1)'>Tro lai</a>";
            exit;
        }
        session_start();
        $_SESSION['userId'] = $userId;
        echo "Xin chao " . $userId ." . Ban da dang nhap thanh cong . <a href= 'userHome.php'>Trang chu</a>";
    }
?>