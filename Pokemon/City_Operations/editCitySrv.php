<?php
require 'dbconnect.php';


$name = $_REQUEST['name'];
$region = $_REQUEST['region'];
$gym = $_REQUEST['gym'];
$id = $_REQUEST['id'];



$sql = "update City set name='$name',region='$region',gym='$gym' where id = '$id'";


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