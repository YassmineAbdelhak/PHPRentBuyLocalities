<div id="left-col-container">
	<div style="cursor: pointer" onclick="document.getElementById('new-message').style.display='block'" class="white-back">
	<p align="center">New Message</p>
	</div>
	
<?php

$q=' SELECT DISTINCT `reciever_name`, `sender_name` FROM `messages` WHERE `sender_name`= "'.$_SESSION['user_name'].'" OR `reciever_name`= "'.$_SESSION['user_name'].'" ORDER BY `date_time` DESC' ;
$r = mysqli_query($con, $q);
if ($r) {
	if (mysqli_num_rows($r)>0) {
        $counter = 0;
		$added_user = array();
		while ($row=mysqli_fetch_assoc($r)) {
			$sender_name=$row['sender_name'];
			$reciever_name=$row['reciever_name'];

			if ($_SESSION['user_name']== $sender_name) {
				//add the reciever name but only once so to do that check the user in array 
				if (in_array($reciever_name, $added_user)) {
					//don't add reciever_name bcuz he is already added
				}else{
					//add reciever_name
					?>
					<div class="grey-back">
                       	<?php echo '<a href="?user='.$reciever_name.'">'.$reciever_name.'</a>' ;?>
                	</div>
                 	
					<?php 
					//as reciever name added so add it to the array as well
					$added_user = array($counter => $reciever_name);
					//increment the counter
					$counter++;
				}
			}elseif($_SESSION['user_name']== $reciever_name) {
				//add the sender_name but only once so to do that check the user in array 
				if (in_array($sender_name, $added_user)) {
					//don't add sender_name bcuz he is already added
				}else{
					//add reciever_name
					?>
					<div class="grey-back">
                       	<?php echo '<a href="?user='.$sender_name.'">'.$sender_name.'</a>' ;?>
                	</div>
                 	
					<?php 
					//as sender_name added so add it to the array as well
					$added_user = array($counter => $sender_name);
					//increment the counter
					$counter++;
				}
			}

		}
	}else{
		echo"<script>alert('no msg sent');</script>";
	}
}

?>

	
</div>