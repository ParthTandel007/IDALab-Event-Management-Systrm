<!DOCTYPE html>
<html>

<head>
	<title>school_teacher</title>
</head>

<body>
	<center>
		<?php
         $servername="host";
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
        $enter_institute_name = $_REQUEST['enter_institute_name'];
        $enter_UDISE_code = $_REQUEST['enter_UDISE_code'];
        $teacher_id = $_REQUEST['teacher_id'];
        $DOB = $_REQUEST['DOB'];
        $email_id = $_REQUEST['email_id'];
		$mobile_number = $_REQUEST['mobile_number'];
        $enter_address = $_REQUEST['enter_address'];
        
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO school_teacher VALUES ('$enter_name','$enter_institute_name','$enter_UDISE_code','$teacher_id','$DOB','$email_id','$mobile_number','$enter_address')";
                
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
	</center>
</body>

</html>