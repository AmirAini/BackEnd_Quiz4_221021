<?php
include "connect.php";

$submitID = $_POST['id'];
echo 'Test ID: '.$submitID.'<br>';


//display info
$sql = "SELECT * FROM employee WHERE ID=$submitID;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result); 

if ($resultCheck>0) {
    while ($rows = mysqli_fetch_assoc($result)){ 
        echo "<br> Employee ID: ".$rows['ID']." <br> Employee Name: ".$rows['Name']. "<br> Employee Login: ".$rows['Date_Login'].'<br>';
}
}
?>