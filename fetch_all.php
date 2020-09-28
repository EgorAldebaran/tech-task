<?php

include('connect.php');

$sql = "SELECT * FROM employeer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())     {
        echo "<tr><td>".$row['name']. "</td><td>".$row['surname']. "</td><td>".$row['lastname']. "</td><td>".$row['sex']. "</td><td>".$row['wage']. "</td><td>".$row['team']. "</td>";
        echo '<td><a href="index.php?employeer_id='.$row['employeer_id'].'"><button type="submit" class="btn btn-danger">delete</a></button>';
        echo '<td><a href="edit.php?employeer_id='.$row['employeer_id'].'"><button type="submit" class="btn btn-primary">edit</a></button></td></tr>';
                   }
}
else {
    echo "0 results";
}
$conn->close();
