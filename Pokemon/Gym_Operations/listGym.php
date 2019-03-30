<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>List of Gyms</title>
</head>
<body>
<style> <?php include 'list.css'; ?> </style>
<?php
require 'dbconnect.php';
$sql = "SELECT * from Gym";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
echo "<div id= 'body'>";
echo "<div class='nav_buttons'>";
echo "<button class='addNew'><a href='addGymClt.html'>Add New</a></button>";
echo "<button class='homepage'><a href='/Pokemon/Pokedex_Frontend_Design/pokedex_index.html'>Homepage</a></button>";
echo "</div>";
echo "<div class= 'list_container'>";
echo "<table id = 'List'>";
echo "<tr><th>ID</th><th>Name</th><th>Leader</th><th>Difficulty</th><th>Actions</th></tr>";
while ($s = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $s["id"] . "</td>"; 
  echo "<td>" . $s["name"] . "</td>"; 
  echo "<td>" . $s["leader"] . "</td>"; 
  echo "<td>" . $s["difficulty"] . "</td>";  
  echo "<td>";
  echo "<a href='delGymSrv.php?id=" . $s["id"] . "'>DEL</a> ";
  echo "<a href='edtGymClt.php?id=" . $s["id"] . "'>EDT</a>";
  echo "</td>";
  echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";
?>
</body>
</html>
