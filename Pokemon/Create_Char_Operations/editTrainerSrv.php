<?php
require 'dbconnect.php';

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$hometown = $_REQUEST['hometown'];
$pokeballs = $_REQUEST['pokeballs'];
$numPokemon = $_REQUEST['numPokemon'];


$sql = "update Trainer set name='$name',hometown='$hometown',pokeballs='$pokeballs',numPokemon='$numPokemon' where id = $id";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
} 

?>

<script>
window.location = 'listTrainer.php';
</script>