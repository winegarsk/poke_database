<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edit a Leader</title>
  <link rel="stylesheet" href="/Pokemon/Pokedex_Frontend_Design/add.css" type="text/css">
  </head>
  <body>
  <?php
    require 'dbconnect.php';

    $sql = "SELECT * from Leader where id = " . $_REQUEST['id'];

    if (!$result = $mysqli->query($sql)) {
     echo "Error: Our query failed to execute and here is why: </br>";
     echo "Query: " . $sql . "</br>";
     echo "Errno: " . $mysqli->errno . "</br>";
     echo "Error: " . $mysqli->error . "</br>";
     exit;
     }

   $row = $result->fetch_assoc();
	
   $name = $row['name'];
   $gym = $row['gym'];
   $diff = $row['diff'];





  ?>



<div id= "container">
<form action="edtLeaderSrv.php">
  <input type = "hidden" id= "id" name= "id" value = "<?php echo $id?>">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name?>">
  <label for="gym">Gym:</label>
  <input type="text" id="gym" name="gym" value="<?php echo $gym?>">
  <label for="diff">Difficulty:</label>
  <input type="text" id="diff" name="diff" value="<?php echo $diff?>">
    <input type="submit" value="Save"/>
</form>
</div>
  
  </body>
</html>