<?php



function user_exist ($user, $password) {
	
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$schema = "localbusiness";
	$is_true = false;
	
	
	$connection = mysqli_connect($servername, $username, $pass, $schema);
	

	
	$sql = "select * from users";
	$users = mysqli_query($connection, $sql);
	
	while ($row = mysqli_fetch_assoc($users)){
		if($row['username'] == $user && $row['pass'] == $password ){
			$is_true = true;
			break;
		}
	}
	
	return $is_true;
		
}

function name_free ($user){
	$is_true = true;
	
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$schema = "localbusiness";
	
	
	$connection = mysqli_connect($servername, $username, $pass, $schema);
	$sql = "select username from users";
	$usernames = mysqli_query($connection, $sql);
	
while ($row = mysqli_fetch_assoc($usernames)){
		if($row['username'] == $user) {
			$is_true = false;
			break;
		}
	}
	
	return $is_true;
	
}

function add_new_user($user, $password) {
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$schema = "localbusiness";


	$connection = mysqli_connect($servername, $username, $pass, $schema);
	$sql = "insert into users values ('$user', '$password');";
	$usernames = mysqli_query($connection, $sql);
}

function add_business($user, $business, $img1, $img2, $img3, $category, $adress, $description) {
	
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$schema = "localbusiness";
	
	
	$connection = mysqli_connect($servername, $username, $pass, $schema);
	$sql = "insert into  business values ('$user', '$business', '$img1','$img2','$img3', '$category','$adress','$description');";
	
	$add = mysqli_query($connection, $sql);
}

class Post {
	
	private $servername = "localhost";
	private $username = "root";
	private $pass = "";
	private $schema = "localbusiness";
	
	
	

	
	function show_posts () {
		$connection = mysqli_connect($this->servername, $this->username, $this->pass, $this->schema);
		$sql = "select username, business, img1, category from business;";
		$the_posts = mysqli_query($connection, $sql);
		
		while ($row = mysqli_fetch_assoc($the_posts)){
			echo "<div class='post-home'>
					<img class='post-picture' alt='pic1' src='".$row['img1']."'><br>
					<h4 class='home_post_first_title'>".$row['business']."</h4><br>
					<h4 class='home_post_title'>Owner:". $row['username']."</h4>
					<h4 class='home_post_title'>Categoty:". $row['category']."</h4><br>
							<form action='local-business-post.php' method='post'>
   	 <input type='hidden' name='username' value='". $row['username']."'> 
   	 <input type='hidden' name='business' value='".$row['business']."'>  
 	 <button id='post-button' type='submit'>See more...</button>
	</form>
														</div>";
		}
		
		
		
	}
	
}

function business_post($user, $business) {
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$schema = "localbusiness";
	
	
	$connection = mysqli_connect($servername, $username, $pass, $schema);
	$sql ="select * from business where username = '$user' && business ='$business';";
	
	$the_business = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($the_business);
	
	echo "<div id='main-title'>".$row['business']."</div>
	
	<div id='pictures'><img class='post-picture' alt='' src='".$row['img1']."'><br>
	<img class='post-picture' alt='' src='".$row['img2']."'><br>
	<img class='post-picture' alt='' src='".$row['img3']."'><br>
	
	</div>
	
	<div id='adress'>Adress: ".$row['adress']."</div>
	<div id='owner'>Owner:".$row['username']."</div><br>
	<div id='description'><h4>About:</h4>".$row['description']."</div>";
}

function footer() {
	echo "<br><footer id='footer'>
<hr>
All rights rese... Oh, who cares! 
</footer>";
}

?>