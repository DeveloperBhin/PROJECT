<?php
 include('connection.php');
 $id=$_GET['id'];
 $sql="DELETE  FROM resulttbl1 WHERE uid='$id'";
 $query=(mysqli_query($conn,$sql));
  header('location:viewresult.php');
?>