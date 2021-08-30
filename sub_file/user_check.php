<?php
require_once("../connexion.php");
if (isset($_POST['user'])) {
	$q='SELECT * FROM `utilisateur`WHERE `user_name`= "'.$_POST['user'].'"';
	$r = mysqli_query($con, $q);
	if ($r) {
		if (mysqli_num_rows($r) > 0) {
			//user already exists
			echo '<p style="color:red">User already registred </p>';
		}else{
			echo '<p style="color:green">You can take this name</p>';
		}
	}else{
		echo $q;
	}
}
?>