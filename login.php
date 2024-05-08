<?php 
session_start(); 
include "include/connectToDB.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: logincss.php?error=User Name is required");
	    exit();
	}
	else if(empty($pass)){
        header("Location: logincss.php?error=Password is required");
	    exit();
	}
	else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($link, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user'] = array(
					'email' => $row['email'],
					'Name' => $row['name'],
					'uId' => $row['uId'],
					'pic' => $row['pic'],
					'birthdate'=> $row['bd'],
				);				
            	header("Location: loggedinHomePage.php");
		        exit();
            }
			else{
				header("Location: logincss.php?error=Incorect User name or password");
		        exit();
			}
		}
		else{
			header("Location: logincss.php?error=No data");
	        exit();
		}
	}
	
}else{
	header("Location: logincss.php");
	exit();
}