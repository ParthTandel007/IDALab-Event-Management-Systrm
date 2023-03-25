<!DOCTYPE html>
<html>

<head>
	<title>alumni</title>
</head>

<body>
	<center>
		<?php
		$servername = "host";
		$username = "root";
		$password = "";
		$database = "idealab";
		$conn = mysqli_connect("localhost", "root", "", "idealab");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 10 values from the form data(input)

		$name_of_industry = $_REQUEST['name_of_industry'];
		$enter_address = $_REQUEST['enter_address'];
		$enter_state = $_REQUEST['enter_state'];
		$enter_city = $_REQUEST['enter_city'];
		$enter_district = $_REQUEST['enter_district'];
		$enter_weblink = $_REQUEST['enter_weblink'];
		$mobile_number = $_REQUEST['mobile_number'];
		$email_id = $_REQUEST['email_id'];
		$reg_cert = $_REQUEST['reg_cert'];

		$reg_cert_file = '';
		$reg_cert_file = $_POST['reg_cert_file'];
		$reg_cert_fil_name= $_FILES['reg_cert_file']['name'];
		$tmp_name = $_FILES['reg_cert_file']['tmp_name'];
		move_uploaded_file($tmp_name, "./reg_cert_file/" . $reg_cert_file_name);
		
		// html file lakhvani ahiya 
		header("location: reg_entrepreneur_startup.html");
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO entrepreneur_startup VALUES ('$name_of_industry','$enter_address','$enter_state','$enter_city','$enter_district','$enter_weblink','$mobile_number','$email_id','$reg_cert'.'$reg_cert_file_name')";
		$conn->query($sql);
		
		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			// echo nl2br("\n$email\n $psd\n");
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>