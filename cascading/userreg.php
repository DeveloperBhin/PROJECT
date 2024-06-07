<!DOCTYPE html>
<html>
    <head>
        <title>
            register account
        </title>
    </head>
    <body>
        <form action="userreg.php" method="POST">
            <label>first name:</label>
            <input type="txt" name="fname" required="required"><br><br>
            <label>middle name:</label>
            <input type="txt" name="mname" required="required"><br><br>
            <label>last name:</label>
            <input type="txt" name="lname" required="required"><br><br>
            <label>form four registration number:</label>
            <input type="txt" name="username" required="required"><br><br>
            <label>email:</label>
            <input type="email" name="email" required="required"><br><br>
            <label>password:</label>
            <input type="password" name="password" required="required"><br><br>
            <select name="role">
                <option>select role...</option>
                <option>student</option>
                <option>teacher</option>
                <option>admin</option>

</select><br><br>
            <input type="submit" name="submit"><br>
           <p>click here <a href='useracc.php'>login</a> to login </p>
        </from>
    </body>
</html>

<?php


include('connection.php');
if(isset($_POST['submit'])){
    $fn = $_POST['fname'];
    $mn = $_POST['mname'];
    $ln = $_POST['lname'];
    $un = $_POST['username'];
    $em = $_POST['email'];
    $ps = $_POST['password'];
    $rol = $_POST['role'];

    $harshpassword = MD5($ps);





 $sql = "INSERT INTO usertb (fname,mname,lname,username,email,password,role) VALUES('$fn','$mn','$ln','$un','$em','$harshpassword','$rol')";
 if(mysqli_query($conn,$sql)){
        echo("<script type='text/javascript'> window.alert('succesfully registerd');window.location.href='userreg.php'</script>");
    
}
}

mysqli_close($conn);
?>