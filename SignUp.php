<?php

require_once ("functions.php");

$user = isset($_POST["username"]) ? $_POST["username"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

if(name_free($user) && $user != ""){
  
	add_new_user($user, $password);
	
	echo "Great! Sign in now!";
	
	header('Refresh: 2; url=index.php');
	
}

else {
	echo "alredy used ;( ";
	
	header('Refresh: 2; url=index.php');
	
}

