<?php
session_start();
require_once("connexion.php");
if (isset($_SESSION['user_name']) and isset($_GET['user'])) {
	if (isset($_POST['text'])) {
		//now check for empty msg
		if ($_POST['text'] != '') {
			//now from here we can insert data into the db
			$sender_name = $_SESSION['user_name'];
			$reciever_name = $_GET['user'];
			$message = $_POST['text'];
			$date_time = date('Y-m-d H:i:s');
			$q= 'INSERT INTO `messages` (`sender_name`,`reciever_name`,`message_text`,`date_time`) VALUES("'.$sender_name.'", "'.$reciever_name.'", "'.$message.'", "'.$date_time.'")';
			$r = mysqli_query($con, $q);
			if ($r) {
				//msg sent
				?>
                    <div class="grey-message">
                        <a href="#">Me</a>
                        <p><?php echo $message; ?> </p>
                    </div>
                <?php 
			}else{
				//problem in query
				echo"<script>alert('problem in query');</script>";
			}
		}else{
			echo"<script>alert('please right something first');</script>";
		}}else{
		echo"<script>alert('problem with text');</script>";
	}
}else{
	echo"<script>alert('please login or select a user to send a msg');</script>"
}


?>