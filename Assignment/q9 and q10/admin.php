<?php
include "connect.php";

//Admin 
if ($_POST['login'] == 'Amir') {
    echo 'Employee List (below): <br>';
    
    //Display
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);
    //Check Result
    $resultCheck = mysqli_num_rows($result); 
    
    //Click btn to view and edit
    if ($resultCheck>0)
    { while ($rows = mysqli_fetch_assoc($result)){
        echo '<br> Employee ID '.$rows['ID'].' the Name is'.$rows['Name'].'<br>'.
        
        "<form action='action.php' method='post'>
        <input type='submit' value='View Info'> <input type='hidden' name='id' 
        value='".$rows['ID']."'/></form>
        
        
        <form action='update.php' method='post'>
        <input type='submit' value='Edit Record'><input type='hidden'  name='id'  
        value='".$rows['ID']."'/></form> <br>";
    }

    }
}

?>