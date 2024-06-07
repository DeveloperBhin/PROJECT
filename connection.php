<?php
$conn=mysqli_connect('localhost','root','','selectiondb');


if(mysqli_connect_error()){
    echo"connection failed";
    die();
}
?>