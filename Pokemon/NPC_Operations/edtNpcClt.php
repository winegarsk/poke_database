<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edit an NPC</title>
  <link rel="stylesheet" href="/Pokemon/Pokedex_Frontend_Design/add.css" type="text/css">
  </head>
  <body>
  <?php
    require 'dbconnect.php';

    $sql = "SELECT * from Npc where id = " . $_REQUEST['id'];

    if (!$result = $mysqli->query($sql)) {
     echo "Error: Our query failed to execute and here is why: </br>";
     echo "Query: " . $sql . "</br>";
     echo "Errno: " . $mysqli->errno . "</br>";
     echo "Error: " . $mysqli->error . "</br>";
     exit;
     }

   $row = $result->fetch_assoc();
	
   $id = $row['id'];
   $name = $row['name'];
   $region = $row['region'];
   $job = $row['job'];
   $numPokemon = $row['numPokemon'];





  ?>



<div id= "container">
<form action="edtNpcSrv.php">
  <input type = "hidden" id= "id" name= "id" value = "<?php echo $id?>">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name?>"/>
  <label for="region">Region:</label>
  <input type="text" id="region" name="region" value="<?php echo $region?>">
  <label for="job">Job:</label>
  <input type="text" id="job" name="job" value="<?php echo $job?>">
  <label for="numPokemon">Number of Pokemon:</label>
  <input type="text" id="numPokemon" name="numPokemon" value="<?php echo $numPokemon?>">
    <input type="submit" value="Save"/>
</form>
</div>
  
  </body>
</html>