<?php

include('connect.php');

$employeer_id = $_GET['employeer_id'];

$sql = "SELECT team FROM employeer WHERE employeer_id=$employeer_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['team'];
    }
}
else {
    echo "0 results";
}
$conn->close();
