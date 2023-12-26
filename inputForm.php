<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $email = $_GET ["email"];
    $pasword = $_GET ["password"];
    $subject = $_GET ["subject"];
    $username = $_GET ["username"];
    $class = $_GET ["class"];
    $studentID = $_GET ["studentID"];

    echo "Welcome to HUMG. Your email address: " . $email . "<br> and password: "  . $pasword . "<br>" ;
    echo "You are " . $username . " in class " . $class . " with studentID: " . $studentID . ". The subject you are searching: " . $subject . "." ;
    ?>

</body>
</html>