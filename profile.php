<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<?php

include_once('config.php');

$id = $_GET['id'];

if(isset($id)){	


$sql = "SELECT * FROM members WHERE id='$id'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	 
	$id = $row['id'];
	
	$profilepicture = $row['profilepicture'];
	
    $firstname = $row['firstname'];
	
    $lastname = $row['lastname'];
	
    $email = $row['email'];
	
	$username = $row['username'];
	
	$day = $row['day'];
	
	$month = $row['month'];
	
	$year = $row['year'];
	
	$gender = $row['gender'];
	
	$work = $row['work'];
	
	$city = $row['city'];
	
	$country = $row['country'];
	
	$interested = $row['interested'];
	
	$languages = $row['languages'];
	
	$religious = $row['religious'];
	
	$relationship = $row['relationship'];
	
	$about = $row['about'];

	echo <<<_END
	
	<table class="list" cellspacing="0" cellpadding="0" width="100%">
	
	<td width="30%">
	
	<img src="$profilepicture" alt="Profile Photo">
	
	</td>
	
	<td width="70%">
	
	<b> $firstname $lastname </b>
	
	<br/>
	
	Works At $work
	
	<br/>
	
	From $city,$country
	
	<br/>
	

	
	</td>
	
	</table>
	
	<div class="list1"> Personal Information </div>
	
	<div class="list"> <b> User Name : </b> #$username </div>
	
	<div class="list"> <b> Email : </b> $email </div>
	
	<div class="list"> <b> Gender : </b> $gender </div>
	
	<div class="list"> <b> Birthday : </b> $day $month $year </div>
	
	<div class="list"> <b> City : </b> $city </div>
	
	<div class="list"> <b> Country : </b> $country </div>
	
	<div class="list"> <b> Interested In : </b> $interested </div>
	
	<div class="list"> <b> Languages : </b> $languages </div>
	
	<div class="list"> <b> Religious : </b> $religious </div>
	
	<div class="list1"> Relationship </div>
	
	<div class="list"> $relationship </div>
	
	<div class="list1"> About Me </div>
	<div class="list">$about</div> 

_END;

include_once('footer.php');
 
}

}else{
	
	header('location:login.php');
}
 

?>