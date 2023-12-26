<?php
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flights";
    $result = $conn->query($sql);
    if ($result->num_rows>0)
    {
        echo "<table>";
        echo "<caption>Bảng thông tin chuyến bay</caption>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Origin</th>";
        echo "<th>Destination</th>";
        echo "<th>Duration</th>";
        echo "</tr>";
        for($i = 0;$i<$result->num_rows; $i++)
        {            
            $row = $result->fetch_assoc();
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["origin"] . "</td>";
            echo "<td>" . $row["destination"] . "</td>";
            echo "<td>" . $row["duration"] . "</td>";
            echo "</tr>";          
        }
        echo "</table>";
    }   
    else
    {
        echo "No flight in database";
    }
    $conn->close();
?>