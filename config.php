<?php

$host = "localhost";

$user = "root";

$dbpassword = "";

$database = "soul";

$connect = mysqli_connect($host ,$user ,$dbpassword);

mysqli_select_db($connect ,$database);

?>
