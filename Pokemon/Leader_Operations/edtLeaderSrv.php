<?php
require 'dbconnect.php';

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$gym = $_REQUEST['gym'];
$diff = $_REQUEST['diff'];


$sql = "update Leader set name='$name', gym= '$gym', diff='$diff' where id = $id";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
} 

?>

<script>
window.location = 'listLeader.php';
</script>