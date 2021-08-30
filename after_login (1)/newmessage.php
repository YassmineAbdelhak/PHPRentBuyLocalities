<div id="new-message">
		<p class="m-header">New message</p>
		<p class="m-body">
			<form align="center" method="post">
				<input type="text" class="message-input" list="user" onkeyup="check_in_db()" name="usernamee" placeholder="user_name" id="username_msg">
				<datalist id="user"></datalist>

				<br><br>
				<textarea class="message-input" name="message" placeholder="Write your message"></textarea><br><br>
				<input type="submit" name="send" id="ssend" value="Send">
				<button onclick="document.getElemntById('new-message').style.display='none'" >Cancel</button>
			</form>
		</p>
		<p class="m-footer">Click send to send</p>
</div>

<?php
ob_start();
require_once("connexion.php");
if (isset($_POST['send'])) {
	$sender_name = $_SESSION['user_name'];
	$reciever_name = $_POST['usernamee'];
	$message = $_POST['message'];
	$date_time = date('Y-m-d H:i:s');
	$q= 'INSERT INTO `messages` (`sender_name`,`reciever_name`,`message_text`,`date_time`) VALUES("'.$sender_name.'", "'.$reciever_name.'", "'.$message.'", "'.$date_time.'")';
	$r = mysqli_query($con, $q);
	if ($r) {
		//message sent
		header("location:chat.php?user=".$reciever_name);
                     
	}else{
		//query prob
		echo"<script>alert('error');</script>";
	}
}
?>

<script src="../sub_file/jquery-3.4.1.min.js"></script>
<script>
     //it will be disabled the send 
	document.getElemntById("ssend").disabled = true;
	function check_in_db(){
       var usernamee = document.getElemntById("username_msg").value;
       //send this user to another file check_in_db.php
       $.post("check_in_db.php",
       	{
       	   user: usernamee
       	},
       	//we will recieve this data from check_in_db.php file
       	function(data, status){
       		//alert(data);
       		if (data == '<option value="no user">') {
       			//user registred send button will work
       			document.getElemntById("ssend").disabled = true;
       		}else{
       			//send button will not work
       			document.getElemntById("ssend").disabled = false;
       		}
       		document.getElemntById('user').innerHTML = data;
       	}
       	);
	}
</script>