<!DOCTYPE html>
<html>

<head>
	<title>student</title>
</head>

<body>
		<?php
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
		
		// Taking all 8 values from the form data(input)
		
		$enter_name = $_REQUEST['enter_name'];
        $email_id = $_REQUEST['email_id'];
        $position = $_REQUEST['position'];
        $Department = $_REQUEST['Department'];
		$mobile_number = $_REQUEST['mobile_number'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO coordiantors VALUES ('$enter_name','$email_id','$position','$Department','$mobile_number')";
        
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			// echo nl2br("\n$email\n $psd\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>