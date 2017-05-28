<?php

session_start();
require_once ("functions.php");

$user = isset($_POST["user"]) ? $_POST["user"] : "no-user";

$password = isset($_POST["password"])? $_POST["password"] : "no-pass";

if (user_exist($user, $password)){
	$_SESSION['user'] = array('user' => $user, 'password' => $password);
	header("Location: home.php");
}

else {
	
	echo "wrong nicname or password :(";
			
	header('Refresh: 2; url=index.php');

}

?>