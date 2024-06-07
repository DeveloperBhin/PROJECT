<?php
session_start();
if(!isset($_SESSION['role'])){
    header('location:useracc.php');
}
if($_SESSION['role'] !=='teacher'){
    header('location:useracc.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel= "stylesheet" type="text/css" href="cascading/teacher1.css"/>
    </head>
    <body>
       
    <header>Group NO 5
            <p> DIGITAL ADVANCED SELECTION(DAS)</p></header>

            <div class="columns1">

    <button><a href='studentinfo.php'>TSM9</a></button><br>
    <button><a href='viewstudentinfo.php'>STUDENT INFORMATION</a></button><br>
    <button><a href='viewresult.php'>VIEW RESULT</a></button><br>
    <button><a href='results.php'>UPLOAD RESULTS</a></button><br>
    <button><a href='userreg.php'>REGISTER USER</a></button><br>
     
    <button><a href='schooltable.php'> A-LEVEL SCHOOLS</a></button><br>
    <button> <a href='useracc.php'> Logout</a></button>
</div>
    

<div class="columns2">
    <div class="dashboard">
        
        DashBoard

        <h class="h1">Welcome user:<?php echo $_SESSION['userid'];?></h>
        

</div>
<div class="bod"><br>Welcome <b><?php echo $_SESSION['lname'];?>  <?php echo $_SESSION['fname'];?> </b>Into DIGITAL ADVANCED SELECTION where you can apply for advanced schools with your preffered combination<br>
    make sure you choose subjects which your results are above 'C' grade</div>
</div>
    
    <footer>
        
        <p>&copy;2024 group no 5<br>Mzumbe university<br>fst</p>
        
    </footer>
    
    </body>
</html>