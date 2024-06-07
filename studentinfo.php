<!DOCTYPE html>
<html>
    <head>
        <title>
            student register account
        </title>
        <link rel= "stylesheet" type="text/css" href="cascading/form.css"/>
    </head>
    <body>
        <form action="studentinfo.php" method="POST">
        <label>form four registration number:</label>
            <input type="txt" name="userid" id="userid" required="required"><br><br>
            <label>first name:</label>
            <input type="txt" name="fname" required="required"><br><br>
            <label>middle name:</label>
            <input type="txt" name="mname" required="required"><br><br>
            <label>last name:</label>
            <input type="txt" name="lname" required="required"><br><br>
            
            <label>email:</label>
            <input type="email" name="email" required="required"><br><br>
            <label>Date Of Birth</label>
            <input type="date" name="date" required="required"><br><br>
            <p>SELECT THREE COMBINATION OF YOUR CHOICE</p>
            <label>Select three subjects:</label>
    <br>
    <input type="checkbox" name="subjects[]" value="CIVICS"> CIVICS<br>
    <br>
    <input type="checkbox" name="subjects[]" value="HISTORY">HISTORY<br>
    <br>
    <input type="checkbox" name="subjects[]" value="GEOGRAPHY"> GEOGRAPHY<br>
    <br>
    <input type="checkbox" name="subjects[]" value="KISWAHILI"> KISWAHILI<br>
    <br>
    <input type="checkbox" name="subjects[]" value="ENGLISH"> ENGLISH<br>
    <br>
    <input type="checkbox" name="subjects[]" value="PHYSICS"> PHYSICS<br>
    <br>
    <input type="checkbox" name="subjects[]" value="CHEMISTRY"> CHEMISTRY<br>
    <br>
    <input type="checkbox" name="subjects[]" value="BIOLOGY"> BIOLOGY<br>
    <br>
    <input type="checkbox" name="subjects[]" value="MATHEMATICS"> MATHEMATICS<br>
    <p>SELECT THREE SCHOOLS WHERE COMBINATIONS ARE AVAILABLE</p>

<select name="school1">
                <option>select school...</option>
                <option>MZUMBE SEC</option>
                <option>KILAKALA GIRLS</option>
                <option>TABORA BOYS</option>

</select>


            <input type="submit" name="submit" name="check_grades_value"><br>
          
        </form>
    </body>
</html>
<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $userid = $_POST['userid'];
    $fn = $_POST['fname'];
    $mn = $_POST['mname'];
    $ln = $_POST['lname'];
    $em = $_POST['email'];
    $ps = $_POST['date'];
    $subjects = isset($_POST['subjects']) ? implode(',', $_POST['subjects']) : '';
    
    $sc3 = $_POST['school1'];

    if (empty($subjects)) {
        echo "Error: Please select at least one subject.";
        exit();
    }
    if(empty($subjects)>2){
        echo "Error: select three  subjects only.";
        exit();

    }
    

    // Use prepared statements to prevent SQL injection
    $query = $conn->prepare("SELECT * FROM resulttbl1 WHERE CNO = ?");
    $query->bind_param("s", $userid);
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
        echo "Error: User not found.";
        exit();
    }

    $total_score = 0;
    $count = 0;
    $valid_grades = ['A', 'B', 'C'];
    $subject_array = explode(',', $subjects);

    foreach ($subject_array as $subject) {
        if (isset($row[$subject])) {
            $grade = trim($row[$subject]); // Trim whitespace from the grade
            if (in_array($grade, $valid_grades)) {
                switch ($grade) {
                    case "A":
                        $score = 3;
                        break;
                    case "B":
                        $score = 2;
                        break;
                    case "C":
                        $score = 1;
                        break;
                }
                $total_score += $score;
                $count++;
            } else {
                echo "Error: Invalid grade for $subject: '$grade'. Please check the database entry.";
                exit();
            }
        } else {
            echo "Error: Grade not found for $subject.";
            exit();
        }
    }

    if ($count > 0) {
        $average_score = $total_score / $count;
    } else {
        echo "Error: No valid subjects were selected.";
        exit();
    }

    $insert_query = $conn->prepare("INSERT INTO studentinfotbl1(userid, fname, mname, lname, email, date, subjects, school1) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
    $insert_query->bind_param("ssssssss", $userid, $fn, $mn, $ln, $em, $ps, $subjects,$sc3);
    $insert_query->execute();

    if ($average_score >= 2) {
        echo 
        ("<script type='text/javascript' > window.alert('You have passed with an average score of $average_score');window.location.href='studenthome.php'</script>");

    } else {
       echo ("<script type='text/javascript' > window.alert('You have passed with an lower average score of $average_score');window.location.href='studenthome.php'</script>");
    }
}
?>

