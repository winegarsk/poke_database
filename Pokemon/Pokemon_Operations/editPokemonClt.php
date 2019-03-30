<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edit a Pokemon</title>
  <link rel="stylesheet" href="/Pokemon/Pokedex_Frontend_Design/add.css" type="text/css">
  </head>
  <body>
  <?php
    require 'dbconnect.php';

    $sql = "SELECT * from Pokemon where id = " . $_REQUEST['id'];

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
   $type = $row['type'];
   $str = $row['str'];
   $rarity = $row['rarity'];




  ?>



<div id= "container">
<form action="editPokemonSrv.php">
  <input type = "hidden" id= "id" name= "id" value = "<?php echo $id?>">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name?>">
  <label for="type">Type:</label>
  <input type="text" id="type" name="type" value="<?php echo $type?>">
  <label for="str">Strength:</label>
  <input type="text" id="str" name="str" value="<?php echo $str?>">
  <label for="rarity">Rarity:</label>
  <input type="text" id="rarity" name="rarity" value="<?php echo $rarity?>">
    <input type="submit" value="Save"/>
</form>
</div>
  
  </body>
</html>