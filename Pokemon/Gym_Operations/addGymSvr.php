<?php
require 'dbconnect.php';

$difficulty = $_REQUEST['difficulty'];
$id = $_REQUEST['id'];
$leader = $_REQUEST['leader'];
$name = $_REQUEST['name'];
$sql= "call addGym('".$id."','".$name."','".$leader."','".$difficulty."')";



if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>
<script>
window.location = 'listGym.php';
</script>