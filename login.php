<?php

include_once('header.php');

?>

<div id="registration">

<div class="title">

Soul Mate

</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

session_start();

$email = htmlentities($_POST['email']);

$password = md5($_POST['password']);

$sql = " select * from members where email ='$email' && password ='$password'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['email'] = $email;
	
	header('location:home');
	
}else{
	
	echo <<<_END
	
	<div class="error">Wrong Email Or User Name Or Password</div>
	
_END;
	
}

}?>

<form action="" method="post">

Email

<br/>

<center> <input type="text" name="email" placeholder="Email Address" required> </center>

<br/>

Password

<br/>

<center> <input type="password" name="password" placeholder="**********" required> </center>

<br/>


<center> <input type="submit" name="submit" Value="Log In"> </center>

</form>

<center> <strong> Don't Have Any Account? </strong> </center>

<br/>

<center> <a href="registration"><button>Create New Acoount</button></a> </center>


<br/>

<center> <strong> Or </strong> </center>


<br/>

<center> <a href="forgot"><button>Forgot Password</button></a> </center>

</div>

<br/>

<br/>

<br/>

<br/>

<br/>

<?php

include_once('footer.php');

?>