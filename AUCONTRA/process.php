<?php
session_start();
require_once "config.php";
$id = 1;
//show temp
if(isset($_POST['name'])){
        $query="SELECT * FROM tbltemp WHERE id='".$id."'";
        if($result = mysqli_query($link, $query)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $temp = $row['temp'];
                    echo $temp;
                }
            }
        }
}
//insert log
if(isset($_POST['btnSubmit'])){
    date_default_timezone_set('Asia/Singapore');
    $t = date("h:iA");
    $d = date("Y-m-d");
	$id = 1;
	$query="SELECT MAX(id) AS idmax FROM tbllogs";
        if($result = mysqli_query($link, $query)){
    		if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
					$max = $row['idmax'];
					$id = $max + 1;
				}
			}
		}
    $sql = "INSERT INTO tbllogs VALUES (?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $id, $_SESSION['scannedname'], $_POST['txttemp'], $t, $d);
            date_default_timezone_set("HongKong");
            if(mysqli_stmt_execute($stmt)){
                $_POST['msg'] = "logged";
                header('Location: scan.php');
            }
            else{
                $_POST['msg'] = "notlogged";
                header('Location: scan.php');
            }
        }
}
//register
if(isset($_POST['btnSignUp'])){
    $error = 0;
    $sql = "SELECT * FROM tblaccounts WHERE username = ?";
	if($stmt = mysqli_prepare($link, $sql)){
		mysqli_stmt_bind_param($stmt, "s", $_POST['username']);
		if(mysqli_stmt_execute($stmt)){
			$result = mysqli_stmt_get_result($stmt);
		}
		else{
			echo "Error on select statement";
		}
        if($error == 0 && mysqli_num_rows($result) != 1){
            $sql = "INSERT INTO tblaccounts VALUES (?, ?, ?, ?, ?, ?, ?)";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "sssssss", $_POST['username'], $_POST['password'], $_POST['name'], $_POST['age'], $_POST['bday'], $_POST['contactno'], $_POST['cbUsertype']);
                if(mysqli_stmt_execute($stmt)){
                    header('Location: index.php');
                }
                else{
                    header('Location: index.php');
                }
            }
            else{
                echo "Error on insert statement";
            }
        }
        else{
            echo "Account exists!";
        }
    }
    else{
        echo "Error";
    }
}
?>