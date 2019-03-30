<?php
require 'dbconnect.php';


$name_ = $_REQUEST['name'];
$job = $_REQUEST['job'];
$region = $_REQUEST['region'];
$numPokemon = $_REQUEST['numPokemon'];
$id = $_REQUEST['id'];


$sql = "update Npc set name='$name',job='$job',region='$region',numPokemon='$numPokemon' where id = $id";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
} 

?>

<script>
window.location = 'listNpc.php';
</script>