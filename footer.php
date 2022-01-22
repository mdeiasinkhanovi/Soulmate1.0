<div id="footer">

<?php

if(isset($sessionemail)){	

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
    $firstname = $row['firstname'];
	
    $lastname = $row['lastname'];
	
	$city = $row['city'];
	
	$country = $row['country'];
	
	$interested = $row['interested'];
	
	$languages = $row['languages'];
	
	$religious = $row['religious'];
	
	$relationship = $row['relationship'];
	
	$about = $row['about'];

echo <<<_END

<table class="link" cellspacing="0" cellpadding="0" width="100%">

<td width="55%">

<a href="help">Help</a>

<a href="setting">Settings 

_END;

if(empty($about && $city && $country && $religious && $relationship && $interested)){
	
echo <<<_END
	
	<span><font color="red">*</font></span>
	
_END;
}

echo <<<_END

</a>

<a href="http://www.facebook.com/mdeiasinkhanovi">Contact Us</a>

</td>

<td width="45%">


<a href="report">Report Problem</a>

<a href="toc">Terms & Condition</a>

<a href="logout">Log Out ($firstname $lastname)</a>

</td>

</table>


_END;
 }
 
}

?>

<div class="footer">

<center> <?php echo "Copyright &copy; 2010-" . date('Y'). "&trade;"; ?> </center>

</div>

</div>

</body>