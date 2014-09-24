<body>


    <?php

    $inches = ($_POST['feet']*12) + $_POST['inches'];
    $meters = $inches/ 39.3701;
    ?>

    Your first name is <?php echo $_POST['FirstName']?>
    <p/>
    Your last name is <?php echo $_POST['LastName']?>
    <p/>
    Your Height in meters is <?php echo $meters?>

</body>