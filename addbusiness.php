<?php

session_start();
require_once ("functions.php");

$username = $_SESSION['user']['user'];
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$img1 = isset($_POST["img1"]) ? $_POST["img1"] : "";
$img2 = isset($_POST["img2"]) ? $_POST["img2"] : "";
$img3 = isset($_POST["img3"]) ? $_POST["img3"] : "";
$category = isset($_POST["category"]) ? $_POST["category"] : "";
$adress = isset($_POST["adress"]) ? $_POST["adress"] : "";
$description = isset($_POST["description"]) ? $_POST["description"] : "";


add_business($username, $name, $img1, $img2, $img3, $category, $adress, $description);



header("Location: home.php");


?>