<?php
session_start();
$first_name="";
$last_name="";
$email="";
$pwd="";
$birthday="";
$gender="";
$errors=array();
//connect to databse
$db= mysqli_connect('localhost','root','','samsar');
//if the signup button is clicked
if (isset($_POST['submit'])) {
	$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$pwd = mysqli_real_escape_string($db, $_POST['pwd']);
	$birthday = mysqli_real_escape_string($db, $_POST['birthday']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	
	if (empty($first_name)) {
		array_push($errors, "first name is required"); //add error to errors array
	}
	if (empty($last_name)) {
		array_push($errors, "last name is required"); //add error to errors array
	}
	if (empty($email)) {
		array_push($errors, "email is required"); //add error to errors array
	}
	if (empty($pwd)) {
		array_push($errors, "password is required"); //add error to errors array
	}
	if (empty($birthday)) {
		array_push($errors, "birthday is required"); //add error to errors array
	}
	if (empty($gender)) {
		array_push($errors, "gender is required"); //add error to errors array
	}
	
	
	
	//if there are no errors, save user to database
	if (count($errors)== 0) {
		 //encryt password before storing in db
		$sql = "INSERT INTO utilisateur(first_name, last_name, email, pwd, birthday, gender) VALUES ('$first_name', '$last_name', '$email', '$pwd', '$birthday', '$gender' )";
		mysqli_query($db, $sql);
		header ("Location: indexlogin.php");

	}

	if (isset($_GET['login'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
	$pwd = mysqli_real_escape_string($db, $_POST['pwd']);
	if (empty($email)) {
		array_push($errors, "email is required"); //add error to errors array
	}
	if (empty($pwd)) {
		array_push($errors, "password is required"); //add error to errors array
	}

	if (count($errors)== 0) {
		 //encryt password before comparing it with the one in the db
		$query = "SELECT * FROM utilisateur WHERE email='$email' and pwd='$pwd'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1) {
			//log user in
			header('location: C:\wamp64\www\myhome\after_login\index.php');
		}else{
			array_push($errors, "wrong email/password combination");
			header('location: indexlogin.php');
		}
		

	}
	}
}

?>