
<html>
<head>
	<title>HOME</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">

</head>
<body>

<?php

$uname = "computer06";
$pwd = "feed@123";
$username = $_POST['use'];
$password = $_POST['pas'];
session_start();
if(isset($SESSION['use']))
{	

	echo"Welcome";
}

else
{
	if($username == $uname && $password == $pwd)
	{
		$_SESSION['use']= $uname;
		include'start.html';
		die;
	}
	else

	{
		echo"Username or Password is Incorrect";
		include'start1.html';
	}
}
?>
</body>
</html>