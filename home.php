<!DOCTYPE html>
<html>
<head>
<?php session_start(); 
		require_once ("functions.php");

?>

<link rel="stylesheet" type="text/css" href="main.css">

	<title>Welcome, <?php echo $_SESSION['user']['user'];?></title>
</head>
<body>


<?php include("header.php");?>

<div id="home-side-bar">
	<p class="hello-sidebar">Hello, <?php echo $_SESSION['user']['user'] ?>, <br>
	tell us about <br> <a id="own-business" href="post-business.php">your own business!</a></p>

	<h2 class="follow-sidebar">Follow us on twitter:</h2>
	<img src="https://www.seeklogo.net/wp-content/uploads/2014/12/twitter-logo-vector-download.jpg" width="100px">
	<h2 class="follow-sidebar">Follow us on facebook:</h2>
	<img src="http://www.econ.upm.edu.my/images/sosialmedia/744_bm.png" width="100px">
</div>

<?php 

$post = new Post();

$post->show_posts();


?>

<?php footer(); ?>

</body>
</html>
