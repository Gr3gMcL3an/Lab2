<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        #greyMe {background-color: grey;}

    </style>
</head>
<body>


<a href = "FahrenheitConversion.php">Go to My Original Table</a>

<?php

function converter(){

    $changeColor = 1;

    for($i=0;$i<101;$i++)
    {
        $fahrenheit = $i;
        $celsius = ($i -32) *5/9;

        $roundedCelsius = round($celsius);

       //  echo " $fahrenheit degrees fahrenheit equals $celsius degrees celsius <br>";

if($changeColor % 2 == 1)
{
      echo "<tr><td>$fahrenheit</td><td>$roundedCelsius</td></tr>";
}else{
    echo "<tr id = 'greyMe'><td>$fahrenheit</td><td>$roundedCelsius</td></tr>";;

}//end if


        $changeColor++;
}//end for



    }//end converter



?>

<table border="1" >
    <tr id = "greyMe">
        <td >fahrenheit</td>
        <td>celsius</td>
    </tr>

        <?php converter() ?>

</table>



</body>
</html>