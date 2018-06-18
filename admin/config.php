<?php
 $servername = "localhost";
$dbusername = "hardware";
$dbpassword = "hardware.com";
$db = "hardware";

		// Create connection
		$conn = mysqli_connect($servername, $dbusername, $dbpassword,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>