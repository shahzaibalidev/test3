<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'mydb'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM contactus';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

	if(isset($_GET['delete_id'])){
		
		$delid = $_GET['delete_id'];
		
		if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
		}

		$sql = "DELETE FROM contactus WHERE id = $delid";
		
		$query = mysqli_query($conn, $sql);

		if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
		}
		
	}
		
	header('Location: http://localhost/test3/data.php');
	?>