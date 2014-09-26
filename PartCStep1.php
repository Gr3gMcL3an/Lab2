<body>

<?php
$fileTmpName = $_FILES['userImage']['tmp_name'];
$fileOrigName = $_FILES['userImage']['name'];
$fileSize = $_FILES['userImage']['size'];
$fileUploadError = $_FILES['userImage']['error']; // 0 means success
$result = move_uploaded_file($fileTmpName,"uploads/".$fileOrigName);
?>






    <?php

    $inches = ($_POST['feet']*12) + $_POST['inches'];
    $meters = $inches/ 39.3701;
    ?>

    Your first name is <?php echo $_POST['FirstName']?>
    <p/>
    Your last name is <?php echo $_POST['LastName']?>
    <p/>
    Your Height in meters is <?php echo $meters?>
    <p/>
    Tmp: <?php echo $fileTmpName?>
    <p/>
    Orig: <?php echo $fileOrigName ?>
    <p/>
    Size: <?php echo $fileSize?>
    <p/>
    Status:

    <?php move_uploaded_file($fileTmpName,"pics/".$fileOrigName);?>

    <?php

    if($result == 0)
    {
        echo "Upload successful";
    }else
    {
        "Upload not successful";
    }



    ?>


</body>