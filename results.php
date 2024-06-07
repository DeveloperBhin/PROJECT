<!DOCTYPE html>

<html>
    <head>
        <title>
            school account
            
        </title><link rel= "stylesheet" type="text/css" href="cascading/form1.css"/>
    </head>
    <header>
            VIEW STUDENT INFORMATION<br>
        an admin is allowed to update and remove student information if necessary </header><br>
    <body>
   
        <form action="results.php" method="POST" enctype="multipart/form-data">
            
            <label>file:</label>
            <input type="file" name="file1" required=".csv"><br><br>
     
          
    

            <input type="submit" name="submit"><br>
          
        </from>
    </body>
</html>

<?php


include('connection.php');
if(isset($_POST['submit'])){
    if(isset($_FILES["file1"])&&$_FILES["file1"]["error"]==0){
        $allowed = array("csv"=>"text/csv");
        $filename =$_FILES['file1']['name'];
        $filetype =$_FILES['file1']['type'];
        $filesize =$_FILES['file1']['size'];

        $exist=pathinfo($filename,PATHINFO_EXTENSION);
        if (!array_key_exists($exist,$allowed)){
            die("error:pls select a valid file,(csv)");


        }
        if(in_array($filetype,$allowed)){
            $maxsize = 5*1024*1024;
            if($filesize>$maxsize){
                die("error:file size is larger" );
            }
            if(file_exists("uploads/".$filename)){
                echo $filename ."is already exist";
            }else{
                move_uploaded_file($_FILES['file1']["tmp_name"],"uploads/".$filename);
                echo"your file was uploaded succesfuly";
            }
        }
        else{
            echo"there was a problem when uploading your file";
        }

    }else{
        die("error:".$_FILES["file1"]["error"]);
    }
    

    





 
}

mysqli_close($conn);
?>
