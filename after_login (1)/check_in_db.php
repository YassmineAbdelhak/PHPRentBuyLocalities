<?php
require_once("../connexion.php");
if (isset($_POST['user'])) {
	$q = 'SELECT *FROM `utilisateur` WHERE `user_name`="'.$_POST['user'].'"';
	$r = mysqli_query($con, $q);
	if ($r) {
		if (mysqli_num_rows($r) > 0) {
			//it means the user is in database
			while ($row = mysqli_fetch_assoc($r)) {
				$user_name = $row['user_name'];
				//show users
				echo '<option value="'.$user_name.'">';
			}
		}else{
			echo '<option value="no user">';
		}
	}else{
		echo $q;
	}
}
?>