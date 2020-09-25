<?php

include('connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM employeer WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo '<script>console.log("record success delete!")</script>';
}
else {
    echo "error delete record:"    .$conn->error;
}
