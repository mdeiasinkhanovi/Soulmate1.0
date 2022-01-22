<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>



<div id="registration">

<div class="list1">Update/Change Your Email</div>

Note : After Changing Email You Will Be Logged Out Then Login With New Email

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$email = $_POST['email'];

$sql = " select * from members where email ='$email'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
	
	echo <<<_END

<div class="error">This Email Was Used</div>

_END;

}else{


$sql = "UPDATE members SET email='$email' WHERE email='$sessionemail'";


mysqli_query($connect ,$sql);


header('location:logout');


}

}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	
	$email = $row['email'];
	

echo <<<_END

<form action="" method="post">

Email <span>*</span>
<br/>

<center> <input name="email" type="text" value="$email" placeholder="email" required> </center>

<center> <input name="submit" type="submit" value="Change">  </center>

</form>

_END;

 }

?>

</div>

<?php

include_once('footer.php');

?>