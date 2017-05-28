<!DOCTYPE html>
<html>
<head>

<title>Local Business</title>

<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<?php include("header.php");?>







<?php

session_start();

require_once ("functions.php");

$user = isset($_POST['username']) ? $_POST['username'] : "NO!";
$business = isset($_POST['business']) ? $_POST['business'] : "NO!";


business_post($user, $business);
footer();


?>


</body>
</html>