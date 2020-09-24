<?php

include('connect.php');

$sql = "SELECT * FROM employeer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())     {
        echo "<td>".$row['name']. "</td><td>".$row['surname']. "</td><td>".$row['lastname']. "</td><td>".$row['sex']. "</td><td>".$row['wage']. "</td><td>".$row['group']. "</td>";
                   }
}
else {
    echo "0 results";
}
$conn->close();
