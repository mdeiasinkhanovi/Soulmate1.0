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

$profilepicture = "profilepicture/" . $_POST['gender'] . ".jpg";

$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$email = $_POST['email'];

$username = $_POST['username'];

$password = md5($_POST['password']);

$day = $_POST['day'];

$month = $_POST['month'];

$year = $_POST['year'];

$gender = $_POST['gender'];

$sql = "INSERT INTO members(profilepicture,firstname,lastname,email,username,password,day,month,year,gender)VALUES('$profilepicture','$firstname','$lastname','$email','$username','$password','$day','$month','$year','$gender')";


mysqli_query($connect ,$sql);

echo <<<_END

<div class="success">Registration Succesful<a href="login">Login</a>Now</div>

_END;


}

?>

<form action="" method="post">

Full Name <span>*</span>

<br/>

<center> <input name="firstname" type="text" placeholder="First Name" required> </center>

<br/>

<center> <input name="lastname" type="text" placeholder="Last Name" required> </center>

<br/>

Email Address <span>*</span>

<br/>

<center> <input name="email" type="text" placeholder="Email Or User Name" required> </center>

<br/>

User Name <span>*</span>

<br/>

<center> <input name="username" type="text" placeholder="User Name" required> </center>


<br/>

Password <span>*</span>

<br/>

<center> <input name="password" type="password" placeholder="**********" required>  </center>

<br/>

Birthday <span>*</span>

<br/>

<center>

<table class="link" cellspacing="0" cellpadding="0" width="100%">

<td width="33%">

Day<span>*</span>

<br/>

<select name="day" required>

 <option value="01">01</option>
 
 <option value="02">02</option>
 
 <option value="03">03</option>
 
 <option value="04">04</option>
 
 <option value="05">05</option>
 
 <option value="06">06</option>
 
 <option value="07">07</option>
 
 <option value="08">08</option>
 
 <option value="09">09</option>
 
 <option value="10">10</option>
 
 <option value="11">11</option>
 
 <option value="12">12</option>
 
 <option value="13">13</option>
 
 <option value="14">14</option>
 
 <option value="15">15</option>
 
 <option value="16">16</option>
 
 <option value="17">17</option>
 
 <option value="18">18</option>
 
 <option value="19">19</option>
 
 <option value="20">20</option>
 
 <option value="21">21</option>
 
 <option value="22">22</option>
 
 <option value="23">23</option>
 
 <option value="24">24</option>
 
 <option value="25">25</option>
 
 <option value="26">26</option>
 
 <option value="27">27</option>
 
 <option value="28">28</option>
 
 <option value="29">29</option>
 
 <option value="30">30</option>
 
 <option value="3">31</option>
 
</select>

</td><td width="33%">

Month<span>*</span>

<br/>  <select name="month" required>

 <option value="January">January</option>
 
 <option value="February">February</option>
 
 <option value="March">March</option>
 
 <option value="April">April</option>
 
 <option value="May">May</option>
 
 <option value="June">June</option>
 
 <option value="July">July</option>
 
 <option value="August">August</option>
 
 <option value="September">September</option>
 
 <option value="October">October</option>
 
 <option value="November">November</option>
 
 <option value="December">December</option>
 
</select>

</td>

<td width="33%">

Year<span>*</span>

<br/>

<select name="year" required>

 <option value="1900">1990</option>
 
 <option value="1991">1991</option>
 
 <option value="1992">1992</option>
 
 <option value="1993">1993</option>
 
 <option value="1994">1994</option>
 
 <option value="1995">1995</option>
 
 <option value="1996">1996</option>
 
 <option value="1997">1997</option>
 
 <option value="1998">1998</option>
 
 <option value="1999">1999</option>
 
 <option value="2000">2000</option>
 
 <option value="2001">2001</option>
 
 <option value="2002">2002</option>
 
 <option value="2003">2003</option>
 
 <option value="2004">2004</option>
 
 <option value="2005">2005</option>
 
 <option value="2006">2006</option>
 
 <option value="2007">2007</option>
 
 <option value="2008">2008</option>
 
 <option value="2009">2009</option>
 
 <option value="2010">2010</option>
 
 <option value="2011">2011</option>
 
 <option value="2012">2012</option>
 
 <option value="2013">2013</option>
 
 <option value="2014">2014</option>
 
 <option value="2015">2015</option>
 
 <option value="2016">2016</option>
 
 <option value="2017">2017</option>
 
 <option value="2018">2018</option>
 
 <option value="2019">2019</option>
 
 <option value="2020">2020</option>
 
</select>

</td>

</table>

</center>

<br/>

Gender <span>*</span>

<br/>

<input name="gender" type="radio" value="Male" required> Male

<br/>

<input name="gender" type="radio" value="Female" required> Female

<br/>

<br/>

<center> <input name="submit" type="submit" value="Sign Up">  </center>

</form>

<center> <strong> Already Have An Account? </strong> </center>

<br/>

<center> <a href="login"><button>Sign In</button></a> </center>

</div>

<br/>

<br/>

<br/>

<br/>

<br/>


<?php

include_once('footer.php');

?>