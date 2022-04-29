<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eres gay</title>
</head>

<style type="text/css">
  h1 { color: red;
  background-image: url("chorras/epilepsia.gif");
  }
  
  body {
  text-align: center;
  }
  #boton {
  background-color:red;
  border-radius: 20%;
  width:20em;
  height:20em;
  }
  
  #boton:hover {
  background-color:green;
  border-radius: 20%;
  }
</style>

<body>
  <h1>Muestrame tus 3 cm de puro poder</h1>
<?php

	$roll = rand(1,5);
	/*$roll2 = rand(1,6);
	
	$total = $roll + $roll2;*/
	

   /*if(isset($_POST['roll'])) {
     
     echo "<h2>Total: $total;</h2>\n";
   } 
   
   else {
     echo "<h2>Haz click para pitoentrar</h2>\n";
   }*/
?>

<?php
	if ($roll == "1" ) {
		print "<img width=\"100\" src=\"img1.gif\">\n";
	}
	if ($roll == "2" ) {
		print "<img width=\"100\" src=\"img2.gif\">\n";
	}
	
	if ($roll == "3" ) {
		print "<img width=\"100\" src=\"img3.gif\">\n";	
	}
	
	if ($roll == "4" ) {
		print "<img width=\"100\" src=\"img4.gif\">\n";
	}
	
	if ($roll == "5" ) {
		print "<img width=\"100\" src=\"img5.gif\">\n";
	}
	/*
	if ($roll == "6" ) {
		print "<img width=\"100\" src=\"img/dado6.png\">\n";
	}
	
	if ($roll2 == "1" ) {
		print "<img width=\"100\" src=\"img/dado1.png\">";
	}
	if ($roll2 == "2" ) {
		print "<img width=\"100\" src=\"img/dado2.png\">";
	}
	
	if ($roll2 == "3" ) {
		print "<img width=\"100\" src=\"img/dado3.png\">";	
	}
	
	if ($roll2 == "4" ) {
		print "<img width=\"100\" src=\"img/dado4.png\">";
	}
	
	if ($roll2 == "5" ) {
		print "<img width=\"100\" src=\"img/dado5.png\">";
	}
	
	if ($roll2 == "6" ) {
		print "<img width=\"100\" src=\"img/dado6.png\">";
	}*/
	
	else {
	
	}
?>


  <form method="POST">
    <input id="boton" type="submit" name="roll" value="Push me">
  </form>
</body>
</html>
