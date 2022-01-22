<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>



<div id="registration">

<div class="list1">Update/Change Your Profile</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$work = $_POST['work'];

$city = $_POST['city'];

$country = $_POST['country'];

$interested  = $_POST['interested'];

$languages  = $_POST['languages'];

$religious  = $_POST['religious'];

$relationship = $_POST['relationship'];

$about = $_POST['about'];

$sql = "UPDATE members SET work='$work' , city='$city' ,country='$country' ,interested='$interested' ,languages='$languages' ,religious='$religious' ,relationship='$relationship',about='$about' WHERE email='$sessionemail'";


mysqli_query($connect ,$sql);


echo <<<_END

<div class="success">Profile Succesfully Updated</div>

_END;


}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	$work = $row['work'];
	
	$city = $row['city'];
	
	$country = $row['country'];
	
	$interested = $row['interested'];
	
	$languages = $row['languages'];
	
	$religious = $row['religious'];
	
	$relationship = $row['relationship'];
	
	$about = $row['about'];
	

echo <<<_END

<form action="" method="post">

Work <span>*</span>

<br/>

<center> <input name="work" type="text" value="$work" placeholder="Work"> </center>

<br/>

City <span>*</span>

<br/>

<center> <input name="city" type="text" value="$city" placeholder="City"> </center>

<br/>

Country <span>*</span>

<br/>

<center> <input name="country" type="text" value="$country" placeholder="Country"> </center>
 
<br/>

Languages <span>*</span>

<br/>

<center> <input name="languages" type="text" value="$languages" placeholder="Languages"> </center>

<br/>

Religious <span>*</span>

<br/>

<center> <input name="religious" type="text" value="$religious" placeholder="Religious"> </center>

<br/>

About <span>*</span>

<br/>

<center> <textarea name="about">$about</textarea></center>

<br/>

Interested In <span>*</span>

<br/>

<center>

<select name="interested" required>

<option value="$interested" selected>$interested</option>

<option value="Men">Men</option>
 
<option value="Women">Women</option>
 
<option value="Men & Women">Men & Women</option>
 
<option value="Others">Others</option>

</select>

</center>

<br/>

Interested In <span>*</span>

<br/>

<center>

<select name="relationship" required>

<option value="$relationship" selected>$relationship</option>

<option value="Single">Single</option>
 
<option value="In A Relationship">In A Relationship</option>
 
<option value="Married">Married</option>
 
<option value="Others">Others</option>

</select>

</center>

<center> <input name="submit" type="submit" value="Update">  </center>

</form>

_END;

 }

?>

</div>

<?php

include_once('footer.php');

?>