
<?php
$password = "password";		// Desired password here
$pass = $_POST["pass"];		// Save password from html form to variable
if ($pass == $password){	// Compare and execute html
?>

        <head>
	<h1 align="center"> <font color="white">webkamera @ raspberrypi</font>
        </head>
        <body bgcolor="black">
            <form action="save.php" method="post">
            <input type="submit" name="save" value="tallenna">
            </form>
	<!-- On button press runs a bash script from another php file -->
	<font color="white">Tallennetut kuvat osoitteessa 'pi@/var/www/pic'
	<!-- Refresh image every 60 seconds -->
	<img src="snap.jpg" id="reloader" onload="setTimeout('document.getElementById(\'reloader\').src=\'snap.jpg?\'+new Date().getMilliseconds()', 60000)" />
        </body>

<?php
}else{
	echo "Wrong password";
}
?>
