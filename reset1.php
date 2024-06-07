<?php
	include('connection.php');
	if(isset($_GET['id'])){
        $id=$_GET['id'];
	$sql="SELECT * from `usertb` where userid='$id'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query);
    }
    else{
        echo"I am having a hard tim";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            student register account
        </title>
    </head>
    <body>
        <form action="reset.php? id=<?php echo $id;?>" method="POST">
        <label>change password:</label>
            <input type="password" name="password" value="<?php echo $row['password']?>"><br><br>
            <input type="submit" name="submit"><br>
</form>
</body>
</html>