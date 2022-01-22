<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>



<div id="registration">



<div class="list1">Delete Your Account</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$password = md5($_POST['password']);

$sql = " select * from members where email ='$sessionemail' && password ='$password'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
	
$deletesql = "DELETE FROM members WHERE email='$sessionemail' && password='$password'";

mysqli_query($connect,$deletesql);


	
header('location:logout');


}else{
	
	echo <<<_END

<div class="error">Wrong Password</div>

_END;

}

}

?>

<?php

echo <<<_END

<form action="" method="post">

Enter Your Password <span>*</span>
<br/>

<center> <input name="password" type="password" placeholder="Password" required> </center>

<center> <input name="submit" type="submit" value="Edit">  </center>

</form>

_END;



?>

</div>

<?php

include_once('footer.php');

?>