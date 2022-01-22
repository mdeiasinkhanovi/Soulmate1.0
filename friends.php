<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<?php
 
include_once('config.php');
 
$sql = "SELECT * FROM members";
 
$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result))
	 
 {
	 $id = $row['id'];
	 $profilepicture = $row['profilepicture'];
	 $firstname = $row['firstname'];
	 $lastname = $row['lastname'];
	 
	 echo <<<_END
	 
	<table class="list" cellspacing="0" cellpadding="0" width="100%">
	
	<td width="15%">
	
	<img src="$profilepicture" alt="Profile Photo" width="30px" height="48px">

	</td>
	
	<td width="85%">
	
	<a href="profile?id=$id">
	
	$firstname $lastname
	
	<br/>
	
	<br/>
	
	<button>Send Request</button>  <button>Message</button>
	
	</a>
	
	</td>
	
	</table>
	
	
	
_END;
 
 }
 ?>
 
 <?php
 
 include_once('footer.php');
 
 ?>