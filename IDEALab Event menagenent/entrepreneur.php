<!DOCTYPE html>
<html>

<head>
    <title>industry</title>
</head>

<body>
    <center>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "idealab";
        $conn = mysqli_connect("localhost", "root", "", "idealab");

        // Check connection
        if ($conn === false) {
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
        $reg_cert = $_REQUEST['reg_cert'];


        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO file VALUES ('$name_of_industry','$enter_address','$enter_state','$enter_city','$enter_district','$enter_weblink','$mobile_number','$email_id','$reg_cert')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
        //         header("location: login.php");
        // // Close connection
        // mysqli_close($conn);

            // echo nl2br("\n$email\n $psd\n");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        ?>
    </center>
    <?php
    $username ='root';
    $host = 'localhost';
    $password = '';
    $dbname = 'idealab';

    $conn = new mysqli($host, $username, $password,$dbname);
    $file = '';
    $file = $_POST['file'];
    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp_name, "./files/".$file_name);
    $sql = "INSERT INTO file VALUES ('$file_name')";
    $conn->query($sql);
    // header("location: login.php");

?>
</body>

</html>