<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<div class="list1">Settings</div>

<a href="cprofile"> <div class="list">Change Profile <?php

if(isset($sessionemail)){	

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
    $firstname = $row['firstname'];
	
    $lastname = $row['lastname'];
	
	$city = $row['city'];
	
	$country = $row['country'];
	
	$interested = $row['interested'];
	
	$languages = $row['languages'];
	
	$religious = $row['religious'];
	
	$relationship = $row['relationship'];
	
	$about = $row['about'];

if(empty($about && $city && $country && $religious && $relationship && $interested)){
	
echo <<<_END
	
	<span><font color="red">*</font></span>
	
_END;
}

}
 
}

?></div> </a>

<a href="cprofilepicture"> <div class="list">Change Profile Picture</div> </a>

<a href="cname"> <div class="list">Change Name</div> </a>

<a href="cemail"> <div class="list">Change Email</div> </a>


<a href="cusername"> <div class="list">Change User Name</div> </a>


<a href="cpassword"> <div class="list">Change Password</div> </a>

<a href="delete"> <div class="list">Delete Account</div> </a>

<?php

include_once('footer.php');

?>