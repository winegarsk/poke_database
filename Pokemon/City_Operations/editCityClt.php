<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edit a City</title>
  <link rel="stylesheet" href="/Pokemon/Pokedex_Frontend_Design/add.css" type="text/css">
  </head>
  <body>
  <?php
    require 'dbconnect.php';

    $sql = "SELECT * from City where id = " . $_REQUEST["id"];

    if (!$result = $mysqli->query($sql)) {
     echo "Error: Our query failed to execute and here is why: </br>";
     echo "Query: " . $sql . "</br>";
     echo "Errno: " . $mysqli->errno . "</br>";
     echo "Error: " . $mysqli->error . "</br>";
     exit;
     }

   $row = $result->fetch_assoc();
	
   $name = $row['name'];
   $region = $row['region'];
   $gym = $row['gym'];
   $id = $row['id'];





  ?>



<div id= "container">
<form action="editCitySrv.php">
  <input type = "hidden" id= "id" name= "id" value = "<?php echo $id?>">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name?>">
  <label for="region">Region:</label>
  <input type="text" id="region" name="region" value="<?php echo $region?>">
  <label for="gym">Gym:</label>
  <input type="text" id="gym" name="gym" value="<?php echo $gym?>">
    <input type="submit" value="Save"/>
</form>
</div>
  
  </body>
</html>