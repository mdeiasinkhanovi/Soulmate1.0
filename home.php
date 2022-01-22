<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$messages  = $_POST['messages'];

$sqlmessages = "INSERT INTO group_messages(firstname,lastname,messages)VALUES('$firstname','$lastname','$messages')";


mysqli_query($connect ,$sqlmessages);

header('location:home');

}

?>

<?php

include_once('config.php');


$sql = "SELECT * FROM members WHERE email ='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	 
	$id = $row['id'];
	
	$firstname = $row['firstname'];
	
	$lastname = $row['lastname'];
	
	$profilepicture = $row['profilepicture'];
	
	echo <<<_END

	
<form action="" method="post"> 
	
	<input type="text" name="firstname" value="$firstname" hidden>
	
	<input type="text" name="lastname" value="$lastname" hidden>
	
	<table class="list" cellspacing="5" cellpadding="0">
	
	<td>
	
	<a href="profile?id=$id"><img src="$profilepicture" alt="Profile Photo" width="50px" height="50px" class="img"></a>
	
	</td>
	
	<td>
	
<textarea name="messages"></textarea>

</td>

<td>

<input type="submit" name="submit" value="SEND">

</td>
	
	</table>
	
</form>

_END;

 }

?>

<div class="list1">Group Chat</div>

<?php

include_once('config.php');

$messagesperpage = 10;

if(isset($_GET['page']) && !empty($_GET['page'])){
	
$currentpage = $_GET['page'];

}else{
	
$currentpage = 1;

}

$start = ($currentpage * $messagesperpage) - $messagesperpage;

$sql = "SELECT * FROM group_messages";

$almessages = mysqli_query($connect, $sql);

$totalmessages = mysqli_num_rows($almessages);

$lastpage = ceil($totalmessages/$messagesperpage);

$firstPage = 1;

$nextpage = $currentpage + 1;

$previouspage = $currentpage - 1;

$sql1 = "SELECT * FROM group_messages ORDER BY messageid DESC  LIMIT $start, $messagesperpage";

$result = mysqli_query($connect, $sql1);


?>

<?php

while($row = mysqli_fetch_array($result))
	 
 {

	 $firstname = $row['firstname'];
	 
	 $lastname = $row['lastname'];
	 
	 $messages = $row['messages'];
	 
	 $date = $row['date'];
	 
	 echo <<<_END
	 
	
	<div class="post">
	
	<a href="#"><b>$firstname $lastname</b></a>
	
	<br/>
	
	<p>$messages</p>
	
	
	
	</div>
	
	
	
	
_END;
 
 }

?>

 <div style="clear:both"></div>

<center>

<?php


if($nextpage<=$lastpage){
	
	echo "<div class='button'>" . "<a href='?page=" .$nextpage . "'>" . "Recent Messages" . "</a>" . "</div>";
	
}else{
	
	echo "<div class='button'>" . "Recent Messages" . "</div>";
}


 ?>
 
 </center>
 
 <div style="clear:both"></div>

<?php

include_once('footer.php');

?>