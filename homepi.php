<?php
//$usr_in = $_POST['username'];		// Username input from form
//$pw_in = $_POST['password'];		// Password input from form
$usr_in = "usr";		// test
$pw_in = "pass";		// test
$username = "usr";					// Set username
$password = "pass";					// Set password
echo "2";
if (($username == $usr_in) && ($password == $pw_in)){
	echo "2";
?>

	<!DOCTYPE HTML>
	<center>
		<head>
			<font color="white"> HomePi </font>
		</head>
		
		<body bgcolor="black">
			<p> <font color="white"> Actions: </font> </p>
			<p> <button type="button" value="Print" onclick_se="<?php echo "shell_exec(echo "echo Hello")"; ?>"> </p>
		</body>
	</center>

<?php
echo "3";
}else{
	echo "wrong password";
}
?>