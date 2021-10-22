<?php
include_once "login.php";
include_once "connect.php";

//get variable 
$employeeID = $_POST['ID'];

// insert timestamp
$sql = "INSERT INTO employee(Name) 
        VALUES ('$employeeID');";    

    //check if successful
    if (mysqli_query($conn, $sql)) {
    echo "Timestamped succesfully!";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
