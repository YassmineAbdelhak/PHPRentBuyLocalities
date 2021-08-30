
<div id="right-col-container">
	<div id="message-container">
          <?php
          $no_message = false;

          if (isset($_GET['user'])) {
               $_GET['user'] = $_GET['user'];

          }else{
               //user var is not in the url bar so select the last user u have sent the msg to
               $q='SELECT `sender_name`, `reciever_name` FROM `messages` WHERE `sender_name`= "'.$_SESSION['user_name'].'" OR `reciever_name`= "'.$_SESSION['user_name'].'" ORDER BY `date_time` DESC LIMIT 1 ';
               $r = mysqli_query($con, $q);
               if ($r) {
                    if (mysqli_num_rows($r)>0) {
                         while ($row =mysqli_fetch_assoc($r)) {
                              $sender_name = $row['$sender_name'] ;
                              $reciever_name = $row['reciever_name'];
                              if ($_SESSION['user_name'] == $sender_name) {
                                   $_GET['user'] = $reciever_name;
                              }else{
                                   $_GET['user'] = $sender_name;
                              }
                         }
                         
                    }else{
                         //this user havent sent any msg
                         echo"<script>alert('no msg sent');</script>";
                         //echo 'no msg sent';
                         $no_message = true;

                    }
               }else{
                    //query prob
                    
                    echo"<script>alert('prob query');</script>";
               }

          }
          if ($no_message == false) {
               
     
          $q= 'SELECT * FROM `messages` WHERE `sender_name`= "'.$_SESSION['user_name'].'" AND `reciever_name`= "'.$_GET['user'].'" OR `sender_name`= "'.$_GET['user'].'" AND `reciever_name`= "'.$_SESSION['user_name'].'" ';
          $r= mysqli_query($con, $q);
          if ($r) {
               //sucess
               while ($row = mysqli_fetch_assoc($r)){
                    $sender_name = $row['sender_name'];
                    $reciever_name = $row['reciever_name'];
                    $message = $row['message_text'];
                    //check whos the sender of the msg
                    if ($sender_name == $_SESSION['user_name']) {
                         //show the msg with grey back
                         ?>
                         <div class="grey-message">
                           <a href="#">Me</a>
                           <p><?php echo $message; ?> </p>
                         </div>
                         <?php 

                    }else{
                         //show the msg with white back
                         ?>
                         <div class="white-message">
                              <a href="#"><?php echo $sender_name; ?> </a>
                              <p><?php echo $message; ?></p>
                         </div>
                         <?php 
                    }
               }
               
          }else{
               //query error
               echo $q;
          }
          //end of no_message
     }
          ?>    
	</div>
     <form method="post" id="message-form">
	<input id="message_text" name="message" style="width: 750px; height: 50px;" placeholder="Write your message">
     <input type="submit" name="send"  style="width: 50px; height: 50px; position: absolute;" value="send">
     </form>
</div>
<script src="../sub_file/jquery-3.4.1.min.js"></script>
<script>
     $("document").ready(function(event){
          //now if the form is submitted
          $("#right-col-container").on('submit', '#message-form', function(){
               //take the data from textarea
               var message_text = $(#message_text).val();
               //send the data to sending_process.php file
               $.post("sending_process.php?user=<?php echo $_GET ['user']; ?>",
                    {
                         text: message_text,
                    },
                    //in return we'll get
                    function(data, status){
                         //alert(data);
                         //first remove text from message_text so
                         $("#message_text").val("");
                         //now add the data inside the msg container 
                         document.getElementById("message-container").innerHTML += data;

                    }
                    );
          });


          //if any button is pressed inside right-col-container
          $("#right-col-container").keypress(function(e){
               //as we will submit the form with submit button so
               if (isset([$_POST['send']])) {
                    //it means enter is clicked without shift key so submit the form
                    $("#message-form").submit();

               }
          });
     });
</script>