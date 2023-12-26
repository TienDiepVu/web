<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Search flight</h1>
    <form action="" method="get" name="Register">
        Origin <input type="text" name="origin"> <br>
        Destination <input type="text" name="destination"> <br>
        <input type="submit" value="Search">
    </form>
    <?php
    if (isset($_GET["origin"])) {
        $origin = $_GET["origin"];
        $destination = $_GET["destination"];
        require 'connect.php';
        mysqli_set_charset($conn, 'UTF8');
        $sql = "SELECT * FROM flights WHERE origin = '$origin' and destination = '$destination'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<caption>Bảng thông tin chuyến bay</caption>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Origin</th>";
            echo "<th>Destination</th>";
            echo "<th>Duration</th>";
            echo "</tr>";
            $row = $result->fetch_assoc();
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["origin"] . "</td>";
            echo "<td>" . $row["destination"] . "</td>";
            echo "<td>" . $row["duration"] . "</td>";
            echo "<td>";
            echo "<button type='submit'>Buy</button>";
            echo "</td>";
            echo "</tr>";

        } else {
            echo "No flight in database";
        }
        $conn->close();
    }
    ?>
</body>

</html>