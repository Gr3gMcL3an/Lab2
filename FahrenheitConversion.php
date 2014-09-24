<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<a href = "PartBStep2.php">Go to my improved table</a>


<?php

function converter(){

for($i=0;$i<101;$i++)
{
    $fahrenheit = $i;
    $celsius = ($fahrenheit -32) *5/9;

   // echo " $fahrenheit degrees fahrenheit equals $celsius degrees celsius <br>";

    echo "<td>$fahrenheit</td><td>$celsius</td></tr>";

}//end converter

}

?>

<table border="1" >
  <tr>
    <td>fahrenheit</td>
    <td>celsius</td>
  </tr>
  <tr>
   <?php converter();?>
  </tr>
</table>



</body>
</html>