<?php
require_once 'config.php';

    
    $id = 1;
	$tempvalue = $_POST['tempvalue'];
if(!empty($tempvalue)){	
	echo "hi";
	$sql = "UPDATE tbltemp SET temp = ? WHERE id = ?";
       
	if($stmt = mysqli_prepare($link, $sql)){	
		mysqli_stmt_bind_param($stmt, "ss", $tempvalue, $id);
		if(mysqli_stmt_execute($stmt)){
                    echo "Successful";
                }
                else{
                    echo "Error on update statement";
                }
        }
}
echo "hello";

?>
