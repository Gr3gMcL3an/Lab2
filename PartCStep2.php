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

$inputDayFormHtml=$_GET['birthDay'];
$inputMonthFormHtml=$_GET['birthMonth'];

function calcSign($inputDayForm,$inputMonthForm)
{
//signs
//[00] = NAME
//[01] = Start Month
//[02] = start day
//[03] = End month
//[04]= End day
 $signs = array
 (
     array("Aquarius",     1, 20, 2, 18),
     array("Pisces", 2 ,19,3, 20),
     array("Aries ",3,21,4,19),
     array("Taurus" ,4 ,20,5 ,20),
     array("Gemini", 5, 21, 6 ,20),
     array("Cancer" ,  6, 21,  7, 22), //5
     array("Leo", 7 ,23,8, 22), //6
     array("Virgo", 8, 23, 9 ,22),//7
     array("Libra", 9, 23,10 ,22),
     array("Scorpio",   10, 23,  11, 21),
     array("Sagittarius", 11, 22, 12 ,21),
     array("Cappricorn",   12,22,  1, 19)

 );
    $inputDay=$inputDayForm;
    $inputMonth=$inputMonthForm;

    $start=0;
    $end=0;

    for($i=0;$i<12;$i++){

        $startMonth = $signs[$i][3];
        $endMonth = $signs[$i][1];



            if ($startMonth == $inputMonth)
            {
                $start = $i;
            }//end if

    }//end for

    $take = $start;

    if($inputDay > $signs[$start][4])
    {
        $take++;
        if($take==12)
        {
            $take =0;
        }

    }

    echo  $signs[$take][0] ;

  //  return $signs[$take][0] ;

//ADD CONDITION TO TURN TAKE TO 1 IF IT REACHES 11

}

?>


Hello, <?php echo $_GET['FirstName']?> <?php echo $_GET['LastName']?>!
<p/>
Your Zodiac sign is <?php calcSign($inputDayFormHtml,$inputMonthFormHtml) ?>






</body>