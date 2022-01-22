<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>



<div id="registration">

<div class="list1">Update/Change Your User Name</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$username = $_POST['username'];

$sql = " select * from members where username ='$username'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
	
	echo <<<_END

<div class="error">This Name Was Taken</div>

_END;

}else{

$sqlupdate = "UPDATE members SET username='$username' WHERE email='$sessionemail'";


mysqli_query($connect ,$sqlupdate);


echo <<<_END

<div class="success">User Name Succesfully Updated</div>

_END;


}

}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	
	$username = $row['username'];
	

echo <<<_END

<form action="" method="post">

User Name <span>*</span>
<br/>

<center> <input name="username" type="text" value="$username" placeholder="username" required> </center>

<center> <input name="submit" type="submit" value="Change">  </center>

</form>

_END;

 }

?>

</div>

<?php

include_once('footer.php');

?>