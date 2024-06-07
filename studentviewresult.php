<!DOCTYPE html>
<html>
    <head>
        <title>
            student register account
        </title>
        <link rel= "stylesheet" type="text/css" href="cascading/view1.css"/>
    </head>
    <body>
        <?php
include'connection.php';
$sql="SELECT * FROM resulttbl1";
$query=(mysqli_query($conn,$sql));
while($row=mysqli_fetch_array($query)){
    ?>
    <table border='1'>
    <tr>
    <th>Form four No.</th><th>AGGREGATE</th><th>DIV</th><th>CIVICS</th><th>HISTORY</th><th>GEOGRAPHY</th><th>KISWAHILI</th><th>ENGLISH</th><th>PHYSICS</th><th>CHEMISTRY</th><th>BIOLOGY</th><th>B/MATHEMATICS</th>
   
   </tr>
   <tr>
    
    <td><?php echo $row['CNO'];?></td>
   <td><?php echo $row['AGGT'];?></td>
   <td><?php echo $row['DIVISION'];?></td>
   <td><?php echo $row['CIVICS'];?></td>
   <td><?php echo $row['HISTORY'];?></td>
   <td><?php echo $row['GEOGRAPHY'];?></td>
   <td><?php echo $row['KISWAHILI'];?></td>
   <td><?php echo $row['ENGLISH'];?></td>
   <td><?php echo $row['PHYSICS'];?></td>
   <td><?php echo $row['CHEMISTRY'];?></td>
   <td><?php echo $row['BIOLOGY'];?></td>
   <td><?php echo $row['MATHEMATICS'];?></td>
   


    </tr>
  </table>
 <?php
}
?>
</body>
<html>



