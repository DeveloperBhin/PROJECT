<?php
	include('connection.php');
	$id=$_GET['id'];
	$sql="SELECT * from `studentinfotbl1` where userid='$id'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            student register account
        </title>
        <link rel= "stylesheet" type="text/css" href="cascading/form.css"/>
    </head>
    <body>
        <form action="update.php? id=<?php echo $id;?>" method="POST">
        <label>form four registration number:</label>
            <input type="txt" name="username" value="<?php echo $row['userid']?>"><br><br>
            <label>first name:</label>
            <input type="txt" value="<?php echo $row['fname']?>" name="fname" ><br><br>
            <label>middle name:</label>
            <input type="txt" name="mname" value="<?php echo $row['mname']?>"><br><br>
            <label>last name:</label>
            <input type="txt" name="lname" value="<?php echo $row['lname']?>"><br><br>
           
            <label>email:</label>
            <input type="email" name="email" value="<?php echo $row['email']?>"><br><br>
            <label>Date Of Birth</label>
            <input type="date" name="date" value="<?php echo $row['date']?>"><br><br>
           
            <p>SELECT THREE COMBINATION OF YOUR CHOICE</p>
            <label>Select three subjects:</label>
    <br>
    <input type="checkbox" name="subjects[]" value="<?php echo $row['subjects']?>"> CIVICS
    <br>
    <input type="checkbox" name="subjects[]" value="<?php echo $row['subjects']?>">HISTORY
    <br>
    <input type="checkbox" name="subjects[]" value="<?php echo $row['subjects']?>"> GEOGRAPHY
    <br>
    <input type="checkbox" name="subjects[]" value="<?php echo $row['subjects']?>"> KISWAHILI
    <br>
    <input type="checkbox" name="subjects[]"value="<?php echo $row['subjects']?>"> ENGLISH
    <br>
    <input type="checkbox" name="subjects[]" value="<?php echo $row['subjects']?>"> PHYSICS
    <br>
    <input type="checkbox" name="subjects[]" value="<?php echo $row['subjects']?>"> CHEMISTRY
    <br>
    <input type="checkbox" name="subjects[]" value="<?php echo $row['subjects']?>"> BIOLOGY
    <br>
    <input type="checkbox" name="subjects[]" value="<?php echo $row['subjects']?>"> MATHEMATICS
    <br>
   
    <br>


<p>SELECT THREE SCHOOLS WHERE COMBINATIONS ARE AVAILABLE</p>

<select name="school1"value="<?php echo $row['school1']?>">
                <option>first selection combination...</option>
                <option>MZUMBE SEC</option>
                <option>KILAKALA GIRLS</option>
                <option>TABORA BOYS</option>



            <input type="submit" name="submit"><br>
          
        </from>
    </body>
</html>