<?php
require 'dbconnect.php';


$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$rarity = $_REQUEST['rarity'];
$id = $_REQUEST['id'];


$sql = "update Legendary set name='$name',type='$type',rarity='$rarity' where id = $id";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
} 

?>

<script>
window.location = 'listLegend.php';
</script>