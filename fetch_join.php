<?php

include('connect.php');

$sql = "select li.employeer_id, li.name, li.surname, li.lastname, li.sex, li.wage, lili.team
from employeer as li inner join team as lili
on li.team_id = lili.team_id order by employeer_id;
 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())     {
        echo "<tr><td>".$row['name']. "</td><td>".$row['surname']. "</td><td>".$row['lastname']. "</td><td>".$row['sex']. "</td><td>".$row['wage']. "</td><td>".$row['team']. "</td>";
                   }
}
else {
    echo "0 results";
}
$conn->close();
