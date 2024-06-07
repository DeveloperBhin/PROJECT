

           
            
<?php
include('connection.php');
$id=$_GET['id'];
$pass=$_POST['password'];


 
mysqli_query($conn,"UPDATE   usertb SET password='$pass' where userid='$id'");
  header('location: reset1.php?id=$id');
?>