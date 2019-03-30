<?php
require 'dbconnect.php';

$name = $_REQUEST['name'];
$region = $_REQUEST['region'];
$gym = $_REQUEST['gym'];
$sql = "insert into City (name, region, gym) VALUES ('$name', '$region', '$gym')";

var_dump($request);


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'listCity.php';
</script>