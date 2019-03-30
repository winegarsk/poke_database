<?php
require 'dbconnect.php';

$name = $_REQUEST['name'];
$gym = $_REQUEST['gym'];
$diff = $_REQUEST['diff'];
$sql = "insert into Leader (name, gym, diff) VALUES ('$name','$gym','$diff')";



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