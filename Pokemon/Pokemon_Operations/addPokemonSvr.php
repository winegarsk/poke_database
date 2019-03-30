<?php
require 'dbconnect.php';

$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$str = $_REQUEST['str'];
$rarity = $_REQUEST['rarity'];
$sql= "call add_a_pokemon('".$name."','".$type."','".$str."','".$rarity."')";

var_dump($sql);

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
<script>
window.location = 'listPokemon.php';
</script>