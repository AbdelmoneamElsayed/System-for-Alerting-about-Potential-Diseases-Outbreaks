
<?php
session_start();

$username = "";
$password = "";
$errors = array();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'phpmyadmin');


// ---------------------------------------------/Login User\---------------------------------------------
if (isset($_POST['login_btn'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);


	if (count($errors) == 0) {

		$query = "SELECT * FROM hospital_admin WHERE username='$username' AND password='$password'";
		$results = mysqli_query($conn, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			array_push($errors, "");
			header('location: 1h_graph_manager.php');
		} else {
			array_push($errors, "Wrong, username not matches with password, try again...");
		}
	}
}
