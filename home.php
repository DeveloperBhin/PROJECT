<?php
session_start();
if(!isset($_SESSION['role'])){
    header('location:useracc.php');
}
if($_SESSION['role'] !=='admin'){
    header('location:useracc.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <a href='studentinfo.php'>TSM9</a>
    <a href='viewstudentinfo.php'>student info</a>
    <a href='viewselections.php'> selections</a>
    <a href='uploadselections.php'>upload selections</a>
    <a href='schooltable.php'> selections</a>
    <a href='results.php'> selections</a>
    <a href='userreg.php'> register users</a>
    <a href='viewselections.php'> selections</a>
    <a href='logout.php'> logout</a>
    </body>
</html>