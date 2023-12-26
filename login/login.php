<?php
    // session_start();
    // ket noi CSDL
    require_once("connect.php");
    //
    if ( isset($_POST["log"]) && $_POST["username"] != '' && $_POST["password"] != '') {
        // gan gia tri
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
        $user = mysqli_query($conn, $sql);
        if (mysqli_num_rows($user) > 0) {
            // $_SESSION['user'] = $username;
            echo"sucess";
        }
        else {
            echo "Failed";
        }
    }
    else {
        header("location: login.html");
    }
    ?>