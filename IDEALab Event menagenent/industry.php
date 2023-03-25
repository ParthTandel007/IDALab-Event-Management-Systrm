<!DOCTYPE html>
<html>

<head>
	<title>industry</title>
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
		
		$name_of_industry = $_REQUEST['name_of_industry'];  
        $enter_address = $_REQUEST['enter_address'];
        $enter_state = $_REQUEST['enter_state'];
        $enter_city = $_REQUEST['enter_city'];
        $enter_district = $_REQUEST['enter_district'];
        $enter_weblink = $_REQUEST['enter_weblink'];
		$mobile_number = $_REQUEST['mobile_number'];
		$email_id = $_REQUEST['email_id'];
		$enter_gst_number = $_REQUEST['enter_gst_number'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO industry VALUES ('$name_of_industry','$enter_address','$enter_state','$enter_city','$enter_district','$enter_weblink','$mobile_number','$email_id','$enter_gst_number')";
        
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