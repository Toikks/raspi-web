<?php
if (isset($_POST["save"])){
    $selection = $_POST["save"];
    $old_path = getcwd();
    chdir('/var/www/html');	// Go to correct directory
    if ($selection == "tallenna"){ 	// This is here only for adding more buttons
	$output = shell_exec('/var/www/scripts/save.sh 2>&1');	// Set bash script
    }
    echo $output;	// Run bash script
    chdir('$old_path'); // Return to starting directory
}
header("location: index.html");	// Redirect to login
?>
