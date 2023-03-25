<!DOCTYPE html>
<html>

<head>
	<title>other_institute_faculty</title>
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
        $enter_AISHE_code = $_REQUEST['enter_AISHE_code'];
        $Department_name = $_REQUEST['Department_name'];
        $faculty_id = $_REQUEST['faculty_id'];
        $DOB = $_REQUEST['DOB'];
		$email_id = $_REQUEST['email_id'];
		$mobile_number = $_REQUEST['mobile_number'];
                
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO other_institute_faculty VALUES ('$enter_name','$enter_institute_name','$enter_AISHE_code','$Department_name','$faculty_id','$DOB','$email_id','$mobile_number')";
                
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