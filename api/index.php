<?php
require '../dbconfig.php';

$sql = "SELECT * FROM users";

// STORE DATA IN result VARIABLE
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()){

    $json[] = $row;
}

echo json_encode($json);

?>