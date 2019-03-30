<?php
require 'dbconnect.php';

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$region = $_REQUEST['region'];
$job = $_REQUEST['job'];
$numPokemon = $_REQUEST['numPokemon'];
$sql = "insert into Npc (id, name, region, job, numPokemon) VALUES ('$id','$name','$region', '$job', '$numPokemon')";



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