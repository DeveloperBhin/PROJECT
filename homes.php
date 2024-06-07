<!DOCTYPE html>
<html>
    <head>
        <title>
user login
        </title>
        <link rel= "stylesheet" type="text/css" href="cascading/login2.css"/>
    </head>
    <body>
    <header>Group NO 5
            <p> DIGITAL ADVANCED SELECTION(DAS)</p></header>
            <br>
            
            <div class="columns2">
                
   <p> DIGITAL_ADVANCED_SELECTION.<br>is a web application basing to be used in ordinary level schools to help form four liver student <br>to apply for their preffered  advanced schools and combinations level ,the system support various things whch include<br>
    <b>1.</b>Their results <br> <b>2.</b>Form for application  <br> <b>3.</b> Advanced level schools information</p>
    <p>By login in into the system you should use your <b><i><u>form four registration number as username</u></i></b> and<br> <b><i><u>school name as your password</u></i></b>  
   </div>
    <div class="columns1">
    
       <form action="homes.php" method="POST">
       <img src="tz2.jpg" ><br>
        <p>Enter your cresidential</p>
        <label>username:</label>
    <input type='txt' name='userid' required='required' placeholder="username"><br><br>
    <label>password:</label>
    <input type='password' name='password' required="required" placeholder="password"><br><br>
    <input type="submit" name="loginbtn" value="Login">
      
   </form>
   </div>
  

   <footer>
        
        <p>&copy;2024 group no 5<br>Mzumbe university<br>fst</p>
        
    </footer>
    </body>
</html>
<?php
session_start();
 //test connection with database
 include('connection.php');
 //post credentials

if(isset($_POST['loginbtn'])){
        $username=$_POST['userid'];
        $password=$_POST['password'];

        //harsh the password
        $harshpassword=MD5($password);

        //generate a local variable which will get selected credentials from the database
         $sql = "SELECT * FROM usertb WHERE userid='$username' and password='$harshpassword'";
        // connect connection object with database credentials object
         $selected = mysqli_query($conn,$sql);

        if(mysqli_num_rows($selected)>0){
            $row = mysqli_fetch_assoc($selected);
            //start sessions
            $_SESSION['role']=$row['role'];
            $_SESSION['userid']=$row['userid'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            //authenticate

            if($_SESSION['role'] =='student'){
                header('location:studenthome.php');
            }
            else if($_SESSION['role']=='teacher'){
                header('location:teacherhome.php');
            }
            else{
                header('location:home.php');
            }
        }




}
else{
    echo("<script>type='txt/javascript' window.alert('incorrect username or password');window.location.href='index.php'</script>");
}
 
?>


