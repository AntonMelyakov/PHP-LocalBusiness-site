<!DOCTYPE html>
<html>
<head>
<?php session_start();
 require_once ("functions.php"); ?>


<title>Tell us about your business</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<?php include("header.php");?>

<div class="registration-form">
<form  action="addbusiness.php" method="post">
<label>What is the name of your business?</label><br>
<input type="text" name="name"><br>
<label>Post couple of pictures:</label><br>
<input type="text" name="img1"><br>
<input type="text" name="img2"><br>
<input type="text" name="img3"><br>
<label>Chose your category</label><br>
<select name="category" size="1">
	<option value="shop">SHOP</option>
	<option value="media">MEDIA</option>
	<option value="restaurant">RESTAURANT</option>
	<option value="handmade">HANDMADE</option>
</select><br>
<label>Adress</label><br>
<input type="text" name="adress"><br>
<label>Tell us about your business:</label><br>
<textarea name="description" cols="23" rows="10">Enter text here...</textarea><br>
<button type="submit">CLICK HERE</button>


</form>
</div>

<?php footer(); ?>

</body>
</html>