<?php
include('connection.php');
$id=$_GET['id'];

$userid=$_POST['userid'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];

$email=$_POST['email'];
$date=$_POST['date'];
$comb1=$_POST['subjects'];
$school1=$_POST['school1'];
$school2=$_POST['school2'];
$school3=$_POST['school3'];

 
mysqli_query($conn,"UPDATE   studentinfotbl1 SET fname='$fname',mname='$mname',lname='$lname',email='$email',date='$date',subjects='$comb1',school1='$school1',school2='$school2',school3='$school3' where userid='$id'");
  header('location:viewstudentinfo.php');
?>