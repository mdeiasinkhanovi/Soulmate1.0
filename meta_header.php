<?php

include_once('config.php');

session_start();

$sessionemail = $_SESSION['email'];

if(isset($sessionemail)){

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	 
    $id = $row['id'];
	 
	echo <<<_END
	
	<div class="title">
	<a href="home"><font size="3px"><b> Soul Mate</b></font></a>
	<input type="text" name="search" style="width:70%;height:30px;border:1px solid #000">
	<input type="submit" name="submit" style="background-color:#000;width:50px;font-size:10px;height:30px" value="Search">
	<br/>
	<br/>
	<a href="home">Home</a>
    <a href="profile?id=$id">Profile</a>
	<a href="messages">Messages</a>
	<a href="friends">Friends</a>
	<a href="menu">Menu</a>
    </div>
_END;

 }

} else {
	
	header('location:login');
	
}

?>