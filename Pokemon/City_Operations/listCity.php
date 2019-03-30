<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>List of Cities</title>
</head>
<body>
<style> <?php include 'list.css'; ?> </style>
<?php
require 'dbconnect.php';
$sql = "SELECT * from City";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
echo "<div id= 'body'>";
echo "<div class='nav_buttons'>";
echo "<button class='addNew'><a href='addCityClt.html'>Add New</a></button>";
echo "<button class='homepage'><a href='/Pokemon/Pokedex_Frontend_Design/pokedex_index.html'>Homepage</a></button>";
echo "</div>";
echo "<div class= 'list_container'>";
echo "<table id = 'List'>";
echo "<tr><th>ID</th><th>Name</th><th>Region</th><th>Gym</th><th>Actions</th></tr>";
while ($s = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $s["id"] . "</td>"; 
  echo "<td>" . $s["name"] . "</td>"; 
  echo "<td>" . $s["region"] . "</td>"; 
  echo "<td>" . $s["gym"] . "</td>";  
  echo "<td>";
  echo "<a href='delCitySrv.php?id=" . $s["id"] . "'>DEL</a> ";
  echo "<a href='editCityClt.php?id=" . $s["id"] . "'>EDT</a>";
  echo "</td>";
  echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";
?>
</body>
</html>
