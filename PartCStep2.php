<body>


<?php
//Aries     3 21 - 4 19
//Taurus    4 20 - 5 20
//Gemini    5 21 - 6 20
//Cancer    6 21 - 7 22
//Leo       7 23 - 8 22
//Virgo     8 23 - 9 22
//Libra     9 23 - 10 22
//Scorpio   10 23 - 11 21
//Sagittarius 11 22 - 12 21
//Cappricor   12 22 - 01 19
//Aquarius     01 20 - 02 18
//Pisces       02 19 - 03 20





function calcSign()
{
//signs
//[00] = NAME
//[01] = Start Month
//[02] = start day
//[03] = End month
//[04]= End day

 $signs = array
 (
     array("Aries ",3,21,4,19),
     array("Taurus" ,4 ,20,5 ,20),
     array("Gemini", 5, 21, 6 ,20),
     array("Cancer" ,  6, 21,  7, 22),
     array("Leo", 7 ,23,8, 22),
     array("Virgo", 8, 23, 9 ,22),
     array("Libra", 9, 23,10 ,22),
     array("Scorpio",   10, 23,  11, 21),
     array("Sagittarius", 11, 22, 12 ,21),
     array("Cappricorn",   12,22,  01, 19),
     array("Aquarius",     1, 20, 02, 18),
     array("Pisces", 2 ,19,03, 20)
 );


    $inputDay=22;
    $inputMonth=3;



    for($i=0;$i<12;$i++){

      //  for($x=0; $x<5; $x++){
            echo $signs[$i][1];

//            if ($signs[$i][4] == 3 );
//            {
//                echo "Possible signs are ". $signs[$i][0] ;
//                echo "<p>";
//
//            }//end if



     //   }//end for

    }//end for


}//end calcSign




?>



<?php  calcSign()?>

</body>