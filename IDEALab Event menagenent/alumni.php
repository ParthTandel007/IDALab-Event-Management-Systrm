<!DOCTYPE html>
<html>

<head>
	<title>alumni</title>
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
		
		// Taking all 9 values from the form data(input)
		
		$enter_name = $_REQUEST['enter_name'];
        $name_of_institute = $_REQUEST['name_of_institute'];
        $program = $_REQUEST['program'];
        $year_of_passing = $_REQUEST['year_of_passing'];
        $email_id = $_REQUEST['email_id'];
        $mobile_number = $_REQUEST['mobile_number'];
        $enter_course = $_REQUEST['enter_course'];
        $enter_address = $_REQUEST['enter_address'];
        $DOB = $_REQUEST['DOB'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO alumni VALUES ('$enter_name','$name_of_institute','$program','$year_of_passing','$email_id','$mobile_number','$enter_course','$enter_address','$DOB')";
        
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