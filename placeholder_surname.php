<?php

include('connect.php');

$employeer_id = $_GET['employeer_id'];

$sql = "SELECT surname FROM employeer WHERE employeer_id=$employeer_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // outpt data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['surname']        ;
    }
}
else {
    echo "0 result"    ;
}
$conn->close();
