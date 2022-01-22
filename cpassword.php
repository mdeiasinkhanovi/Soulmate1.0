<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>



<div id="registration">

<div class="list1">Update/Change Your password</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$oldpassword = md5($_POST['oldpassword']);

$newpassword = md5($_POST['newpassword']);

$sql = " select * from members where email ='$sessionemail' && password ='$oldpassword'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){

$sqlupdate = "UPDATE members SET password='$newpassword' WHERE email='$sessionemail'";


mysqli_query($connect ,$sqlupdate);

echo <<<_END

<div class="success">Password Succesfully Updated</div>

_END;

}else{
	
	echo <<<_END

<div class="error">Wrong Old Password</div>

_END;
	
}

}

?>

<form action="" method="post">

Old Password <span>*</span>

<br/>

<center> <input name="oldpassword" type="password" placeholder="Old Password" required> </center>

<br/>

New Password <span>*</span>

<br/>

<center> <input name="newpassword" type="text" placeholder="New Password" required> </center>

<center> <input name="submit" type="submit" value="Change">  </center>

</form>

</div>

<?php

include_once('footer.php');

?>