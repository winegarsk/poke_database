<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edit a Gym</title>
  <link rel="stylesheet" href="/Pokemon/Pokedex_Frontend_Design/add.css" type="text/css">
  </head>
  <body>
  <?php
    require 'dbconnect.php';

    $sql = "SELECT * from Gym where id = " . $_REQUEST['id'];

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
   $leader = $row['leader'];
   $difficulty = $row['difficulty'];





  ?>



<div id= "container">
<form action="edtGymSrv.php">
  <input type = "hidden" id= "id" name= "id" value = "<?php echo $id?>">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name?>">
  <label for="leader">Leader:</label>
  <input type="text" id="leader" name="leader" value="<?php echo $leader?>">
  <label for="difficulty">Difficulty:</label>
  <input type="text" id="difficulty" name="difficulty" value="<?php echo $difficulty?>">
    <input type="submit" value="Save"/>
</form>
</div>
  
  </body>
</html>