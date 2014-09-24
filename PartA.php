<!DOCTYPE html>
<html>
<head>
    <title>Lab1PartA</title>
</head>
<body>

<h1>Step 1</h1>
<hr/>


<?php
function stepOneFunction($inputString,$inputInt) {

    if($inputInt == 1){
        echo "<h1>$inputString</h1>";
    }elseif($inputInt == 2){
        echo "<h2>$inputString</h2>";
    }elseif($inputInt == 3){
        echo "<h3>$inputString</h3>";
    }elseif($inputInt == 4){
        echo "<h4>$inputString</h4>";
    }elseif($inputInt == 5){
        echo "<h5>$inputString</h5>";
    }elseif($inputInt == 6){
        echo "<h6>$inputString</h6>";
    }

    if(!($inputInt<7) &&($inputInt>0))
    {
        echo "Error, enter a number from 1 - 6";
    }
}

?>

<?php
for($i=1;$i<8;$i++){

stepOneFunction("Function Call",$i);

}
?>

<h1>Step 2</h1>
<hr/>


<?php
$byReferenceString = "Initial value for reference";
$byValueString = "Initial value for value";
?>
This is the initial value for a pass by reference:

<?php echo " ".$byReferenceString;?>
<p/>
This is the initial value for a pass by value:
<?php echo " ".$byValueString;?>
<p/>
<?php
function byReference(&$string) //BY REFERENCE FUNCTION
{
    $string .= "...blah";
}

byReference($byReferenceString);


?>
This is a pass by Reference:

<?php echo " ".$byReferenceString;?>

</p>

<?php

function byValue($string) //BY REFERENCE FUNCTION
{
    $string .= "...blah";
}

byValue($byValueString);

?>

This is a pass by value:

<?php echo " ".$byValueString?>

<h2>Step 2 Question 3</h2>

<?php
$question3Variable = "Hello World";
echo "<p/>";
 echo $question3Variable;
echo "<p/>";
byValue($question3Variable);

echo " ".$question3Variable;

byReference($question3Variable);

echo "<p/>";
echo $question3Variable;

?>

<h2>Step 3</h2>



<?php
$GLOBALS['age'] = 25;

echo "<h1>Your are ". $age . " years old</h1>"
?>



</body>
</html>