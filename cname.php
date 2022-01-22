<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>



<div id="registration">

<div class="list1">Update/Change Your Name</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$firstname = $_POST['firstname'];


$lastname = $_POST['lastname'];


$sql = "UPDATE members SET firstname='$firstname',lastname='$lastname' WHERE email='$sessionemail'";


mysqli_query($connect ,$sql);


echo <<<_END

<div class="success">Name Succesfully Updated</div>

_END;


}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	
	$firstname = $row['firstname'];
	
	$lastname = $row['lastname'];
	

echo <<<_END

<form action="" method="post">

First Name <span>*</span>

<br/>

<center> <input name="firstname" type="text" value="$firstname" placeholder="firstname" required> </center>

<br/>

Last Name <span>*</span>

<br/>

<center> <input name="lastname" type="text" value="$lastname" placeholder="lastname" required> </center>
 

<center> <input name="submit" type="submit" value="Change">  </center>

</form>

_END;

 }

?>

</div>

<?php

include_once('footer.php');

?>