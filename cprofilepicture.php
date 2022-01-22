<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>



<div id="registration">

<div class="list1">Update/Change Profile Picture</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$folder = 'profilepicture/';
  
$filename = $_FILES['file']['name'];
  
$profilepicture = $folder . $filename;
  
move_uploaded_file($_FILES['file']['tmp_name'], $folder.$filename);

$sql = "UPDATE members SET profilepicture='$profilepicture' WHERE email='$sessionemail'";

$sqldelete = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sqldelete);
 
 while($row = mysqli_fetch_array($result)){
	
	$profilepicture = $row['profilepicture'];

unlink($row['profilepicture']);

 }

mysqli_query($connect ,$sql);

echo <<<_END

<div class="success">Profile Picture Succesfully Updated</div>

_END;

}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	$profilepicture = $row['profilepicture'];

echo <<<_END

<form action="" method="post" enctype="multipart/form-data">

Profile Picture <span>*</span>

<br/>

<center>

<img src="$profilepicture" alt="Profile Photo">

<br/>

<input type="file" name="file" required id="file"/> </center>


<center> <input name="submit" type="submit" value="Upload">  </center>

</form>

_END;

 }

?>

</div>

<?php

include_once('footer.php');

?>