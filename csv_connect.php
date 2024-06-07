<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'selectiondb';
$csvfilepath = 'uploads/form4.csv';
$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
    echo "Connection failed";
    die();
}

if (!file_exists($csvfilepath)) {
    die("Error: No such file");
}

if (($handle = fopen($csvfilepath, "r")) !== FALSE) {
    // Skip the first row if it contains column headers
    fgetcsv($handle, 1000, ",");

    $stmt = mysqli_prepare($conn, "INSERT INTO resulttbl1 (CNO, AGGT, DIVISION, CIVICS, HISTORY, GEOGRAPHY, KISWAHILI, ENGLISH,PHYSICS, CHEMISTRY, BIOLOGY, MATHEMATICS,user) VALUES (?,?,?,?,?,?,?,?,?,?,?, ?,?)");

    mysqli_stmt_bind_param($stmt, "sssssssssssss", $CNO, $AGGT, $DIVISION, $CIV, $HIST, $GEO, $KISW, $ENG, $PHY, $CHEM, $BIO, $MATH,$user);

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $CNO = $data[0];
        $AGGT = $data[1];
        $DIVISION = $data[2];
        $CIV = $data[3];
        $HIST = $data[4];
        $GEO = $data[5];
        $KISW = $data[6];
        $ENG = $data[7];
        $PHY = $data[8];
        $CHEM = $data[9];
        $BIO = $data[10];
        $MATH = $data[11];
        $user = isset($data[12]) ? $data[12] : null; 

        if (!mysqli_stmt_execute($stmt)) {
            echo "Error: " . mysqli_error($conn);
        }
    }

    echo "CSV has been successfully inserted into the database";

    fclose($handle);

    mysqli_stmt_close($stmt);
} else {
    echo "Unable to open file";
}

$conn->close();
?>
