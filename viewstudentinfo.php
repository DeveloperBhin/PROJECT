<!DOCTYPE html>
<html>
    <head>
        <title>
            student register account
        </title>
    </head>
    <link rel= "stylesheet" type="text/css" href="cascading/view.css"/>
    <body>
           
    <header>
            VIEW STUDENT INFORMATION<br>
        an admin is allowed to update and remove student informationif necessary </header><br>

        <?php
include'connection.php';
$sql="SELECT * FROM studentinfotbl1";
$query=(mysqli_query($conn,$sql));
while($row=mysqli_fetch_array($query)){
    ?>
    <table border='2'>
    <tr>
    <th>reg_no</th><th>Firstname</th><th>middlename</th><th>lastname</th><th>email</th><th>date</th><th>subjects</th><th>school1</th>
    <th>make changes</th><th>delete user</th></tr>
    <tr>
    
    <td><?php echo $row['userid'];?></td>  
   <td><?php echo $row['fname'];?></td>
   <td><?php echo $row['mname'];?></td>
   <td><?php echo $row['lname'];?></td>
   
   <td><?php echo $row['email'];?></td>
   <td><?php echo $row['date'];?></td>
   <td><?php echo $row['subjects'];?></td>
   <td><?php echo $row['school1'];?></td>
   
   
    <td><a href= 'edit.php?id=<?php echo $row['userid'];?>'>update</td>
    <td><a href='delete.php?id=<?php echo $row['userid'];?>'>remove</td>

    </tr>
  </table>
 <?php
}
?>
</body>
<html>



