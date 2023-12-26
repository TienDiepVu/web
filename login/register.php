<?php
    // ket noi CSDL
    require_once("connect.php");
    //
    if (isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '') {
        // gan gia tri
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        // kiem tra mat khau trung khop hay khong 
        if ($password != $repassword) {
            header('register.html');
        }
        $sql_usr = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql_usr);
        if (mysqli_num_rows($result) > 0) {
            header("location: register.html");
        }
        $sql = "INSERT INTO users (username , password) VALUES ('$username' , '$password')";
        mysqli_query($conn, $sql);
        echo "Success";
        $conn->close();

    }
    else {
        header("location: register.html");
    }
?>