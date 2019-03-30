<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>NPC on Trainer Report</title>
</head>
<body>
<style> <?php include 'view.css'; ?> </style>
<?php
require 'dbconnect.php';
$sql = "SELECT * FROM join_npc_on_trainer";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
echo "<button class='homepage'><a href='/Pokemon/Pokedex_Frontend_Design/pokedex_index.html'>Homepage</a></button>";
echo "<div class= 'list_container'>";
echo "<table id= 'view'>";
echo "<tr><th>t_name</th><th>npc_name</th><th>Pokemon</th><th>Actions</th></tr>";
while ($s = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $s["t_name"] . "</td>"; 
  echo "<td>" . $s["npc_name"] . "</td>"; 
  echo "<td>" . $s["npcPokemon"] . "</td>"; 
  echo "<td>";
  echo "<a href='delTrainerSrv.php?id=" . $s["id"] . "'>DEL</a> ";
  echo "<a href='editTrainerClt.php?id=" . $s["id"] . "'>EDT</a>";
  echo "</td>";
  echo "</tr>";

}
echo "</table>";
echo "</div>";
?>
</body>
</html>