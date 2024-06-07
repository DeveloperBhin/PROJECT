<?php
 include('connection.php');
 $id=$_GET['id'];
 $sql="DELETE  FROM studentinfotbL1 WHERE userid='$id'";
 $query=(mysqli_query($conn,$sql));
  header('location:viewstudentinfo.php');
?>