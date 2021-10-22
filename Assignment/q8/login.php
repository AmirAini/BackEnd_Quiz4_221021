<?php 
include_once "action.php";
date_default_timezone_set("Asia/Kuala_Lumpur");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<form action="action.php" method="post">
    Employee ID: <input type="text" name="ID"><br><br>
    <?php echo "The time is " . date("h:i:sa");?><br><br>
    <input type="submit" name="submit" value="I'm Here!"/>
</form>


</body>
</html>