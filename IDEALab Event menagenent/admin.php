<?php 
session_start(); 
$servername="localhost";
$username ="root";
$password="";		 
$database="idealab";
$conn = mysqli_connect("localhost", "root", "", "idealab");

// Check connection
if($conn === false){
   die("ERROR: Could not connect. "
	   . mysqli_connect_error());
}

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
		header("Location: login_admin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login_admin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home_admin.php");
		        exit();
            }else{
				header("Location: login_admin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login_admin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login_admin.php");
	exit();
}