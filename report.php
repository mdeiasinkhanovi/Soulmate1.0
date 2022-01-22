<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<div class="list1">Report Problems</a></div>

<?php

if(isset($_POST['submit'])){
 $to = "admin@soulmate.com";
 
 $subject = $_POST['subject'];
 
 $message = $_POST['message'];
 
 $from = $sessionemail;
 
 $headers = "From:" . $from;
 
 mail($to,$subject,$message,$headers);
 
 echo <<<_END

 <div class="success">Report Sent To Us,We Will Contact With You As Soon As Possible</div>
 
_END;

}

?>
 
 <div id="login">
 
 <form action="" method="post">
 
 Subject :
 
 <br/>
 
 <input name="subject" type="text" placeholder="Subject">
 
 <br/>
 
 Describe Your Problem :
 
 <br/>
 
<textarea name="message"></textarea>

<br/>

<br/>
  
<input name="submit" type="submit" value="Send">

</div> 
   

<?php

include_once('footer.php');

?>