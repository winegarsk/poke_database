<?php
include 'dbconnect.php';

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$str = $_REQUEST['str'];
$rarity= $_REQUEST['rarity'];



$sql = "update Pokemon set name='$name',type='$type',str='$str',rarity= '$rarity' where id = $id";



if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>
<script>
window.location='listPokemon.php';
</script>