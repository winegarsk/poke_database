<?php
require 'dbconnect.php';

$name = $_REQUEST['name'];
$hometown = $_REQUEST['hometown'];
$pokeballs = $_REQUEST['pokeballs'];
$numPokemon = $_REQUEST['numPokemon'];
$sql= "call addTrainer('".$name."','".$hometown."','".$numPokemon."','".$pokeballs."')";



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
