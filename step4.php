<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
$zendVersion=zend_version();
$phpVersion= phpversion();
$mimeType =ini_get('default_mimetype');
?>


<h1><?php echo "This page was rendered in PHP version ". $phpVersion?></h1>
<h1><?php echo "The ZEND version is ". $zendVersion?></h1>
<h1><?php echo "The default mimetype for this page is  ". $mimeType?></h1>



</body>
</html>



