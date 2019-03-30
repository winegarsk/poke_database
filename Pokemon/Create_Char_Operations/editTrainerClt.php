<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
     <link rel = "stylesheet"
   type = "text/css"
   href = "/Pokemon/Pokedex_Frontend_Design/editChar.css" />
    <title>Edit a Trainer</title>
  </head>
  <body>
  <?php
      require 'dbconnect.php';

      $sql = "SELECT * from Trainer where id = " . $_REQUEST['id'];

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
      $hometown = $row['hometown'];
      $pokeballs = $row['pokeballs'];
      $numPokemon = $row['numPokemon'];




   ?>


     <div id= "container">
       <form action="editTrainerSrv.php">
       	  <input type = "hidden" id= "id" name= "id" value = "<?php echo $id?>">
	  <label for="name">Name:</label>
	  <input type="text" id="name" name="name" value="<?php echo $name?>">
	  <label for="hometown">Hometown:</label>
	  <input type="text" id="hometown" name="hometown" value="<?php echo $hometown?>">
	  <label for="pokeballs">Pokeballs:</label>
	  <input type="text" id="pokeballs" name="pokeballs" value="<?php echo $pokeballs?>">
	  <label for="numPokemon">Number of Pokemon:</label>
	  <input type="text" id="numPokemon" name="numPokemon" value="<?php echo $numPokemon?>">
	  <input type="submit" value="Save"/>
	</form>
      </div>
  </body>
</html>