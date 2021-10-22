<?php
include_once "connect.php";
?>

<form action="update.php" method="post">
Update Employee's Date, (yyyy:mm:dd, hh:mm:ss): <br> <input type="text" name="newDate"><br>
Please put <?php echo $_POST['id']?> in ID to confirm change: <br><input type="text" name="id"><br>
<input type="submit">
</form>

<?php
include "connect.php";

$submitID = $_POST['id'];
$dateUpdate = $_POST['newDate'];

//? it refreshes...
echo 'Test ID: '.$submitID.'<br>';
echo 'Test new timestamp: '.$dateUpdate.'<br>';


//update 
$sql = "UPDATE employee SET Date_Login ='$dateUpdate' WHERE ID = $submitID;";

if (mysqli_query($conn, $sql)) 
{
    echo 'Updated for ID: '.$submitID.'<br><br>';
} 
else 
{
    echo "lol " . mysqli_error($conn);
}


?>