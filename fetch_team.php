<?php

include('connect.php');

$sql = "SELECT * FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())     {
        echo "<tr><td>".$row['title_team']. "</td><td>".$row['number_of_employees']. "</td><td>".$row['max_salary']. "</td>";
                   }
}
else {
    echo "0 results";
}
$conn->close();
