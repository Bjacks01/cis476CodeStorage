<html>
  <body>
  Brandon Jacks
  
  <?php
  //comment
  $var = 3;
  
  function myMessage() {
	  echo "hi there<br><hr>";
  }
  echo "this is var: " . $var . "<br>";
  echo("that is var: $var <br>");
  
  $myArray = array("Brandon", 23, $var);
  
  for($i = 0; $i < count($myArray); $i++) {
	  echo "array value: " . $myArray[$i] . "<br>";
  }
  
  ?>
  </body>
</html>