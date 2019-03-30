<?php
require 'dbconnect.php';


$name = $_REQUEST['name'];
$leader = $_REQUEST['leader'];
$difficulty = $_REQUEST['difficulty'];
$id = $_REQUEST['id'];


$sql = "update Gym set name='$name',leader='$leader',difficulty='$difficulty' where id = $id";


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