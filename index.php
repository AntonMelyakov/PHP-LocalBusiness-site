<!DOCTYPE html>
<html>
<head>

<?php require_once ("functions.php"); ?>
<title>Local Business</title>

<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<?php include("header.php");?>

<h2 id="regular-title">This is the site for your Local business. You can sign in or registrate here:</h2>

<div class="registration-form">
<form name="SignIn" action="signIn.php" method="post">
<label>Username:</label><br>
<input type="text" name="user"><br>
<label>Password</label><br>
<input type="password" name="password"><br>
<button type="submit">CLICK HERE</button>
</form>

<br><?php include("Sign_up_form.php");  ?>
</div>

<?php footer(); ?>
</body>
</html>