<?php

include('connect.php');

$id = $_GET['employeer_id'];



$sql = "delete from employeer where employeer_id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo '<script>console.log("record success delete!")</script>';
}
else {
    echo "error delete record:"    .$conn->error;
}
