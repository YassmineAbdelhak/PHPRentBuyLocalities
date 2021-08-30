<?php
  session_start();
  ob_start();
include("connexion.php");
   $type = $_POST['type'];
   $user=$_SESSION['user_name'];
   $region = $_POST['region'];
   $space = $_POST['space'];
   $beds = $_POST['beds'];
   $baths = $_POST['baths'];
   $garages = $_POST['garages'];
   $price = $_POST['price'];
   $photos = $_POST['photos'];
   $videos = $_POST['videos'];
   $disponibilite = $_POST['disponibilite'];
   $req ="SELECT iduser FROM utilisateur WHERE utilisateur.user_name ='$user';";
   $id=mysqli_query($con,$req);
   $row=mysqli_fetch_array($id);
   $iduser=intval($row[0]);
   if($type !="" AND $region !="" AND $space !="" AND $beds !=""AND $baths !=""AND $garages !="" AND $price !="" AND $photos !="" AND $videos !="" AND $disponibilite !="")
   {
                $sql = "INSERT INTO annonce(type,region,space,beds,baths,garages,price,photos,videos,disponibilite,idvendeur) VALUES ('$type','$region','$space','$beds','$baths','$garages','$price','$photos','$videos','$disponibilite','$iduser');";
                $result = mysqli_query($con,$sql) or die( mysqli_error($con) );
                if($result)
                {      
                       echo "<script>alert('Your proprety have been succsecfully inserted');</script>";
                       header ("Location: myproprety.php");
                }
                else
                {
                       echo"<script>alert('Erreur !!!');</script>";
                }
   }
?>
