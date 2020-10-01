<?php

include('connect.php');

$sql = "select name from employeer";
$result = $conn->query($sql) ;

echo "<br><br><br><table border='2'>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())     {
        echo "<td>".$row['name']        ."</td>";
        echo "</tr>";
    }
}
else {
    echo "0 results";
}

echo "</table>";

echo "<style> div {position:absolute; left:100px; top: 100px;}</style>";

$sql = "select team from employeer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())     {
        echo "<div>";
        echo $row['team']        ;
        echo "</div>";
    }
}
else {
    echo "fuck you";
}

$conn->close();
