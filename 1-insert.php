<?php
    require 'connect.php';
    $Origin = $_GET["Origin"];
    $Destination = $_GET["Destination"];
    $Duration = $_GET["Duration"];
    $sql = "INSERT INTO flights( origin, destination, duration) VALUES ('$Origin', '$Destination', '$Duration')";
    if ($conn->query($sql) === true) {
        echo "New flight created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>