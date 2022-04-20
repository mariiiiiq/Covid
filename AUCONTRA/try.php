<?php
    session_start();
    require_once "config.php";
    
    $sql = "SELECT * FROM tblaccounts WHERE name = '".$_POST['name']."'";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_array($result);	
    if($rows){
        $_SESSION['scannedname'] = $rows['name'];
        echo "Name: " . $_SESSION['scannedname'];
        echo "<br>Age: " . $rows['age'];
        echo "<br>Contact Number: " . $rows['contactnumber'];
    }
    
    
?>
