
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$usernam = mysqli_real_escape_string($link, $_REQUEST['username']);
$password =mysqli_real_escape_string($link, $_REQUEST['password']);
$city =mysqli_real_escape_string($link, $_REQUEST['city']);
$address =mysqli_real_escape_string($link, $_REQUEST['address']);
$confirmpassword =mysqli_real_escape_string($link, $_REQUEST['confirmpassword']);
	$phone =mysqli_real_escape_string($link, $_REQUEST['phone']);

 
// Attempt insert query execution
$sql = "INSERT INTO register (fname, lname, phone,email, address,confirmpassword,password,city,username) VALUES ('$first_name', '$last_name', '$phone','$email', '$address','$confirmpassword','$password','$city','$usernam')";
if(mysqli_query($link, $sql)){
    echo "Registration successfull!. You can now log in.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> WELCOME</h1>
<a href="index2.php" title="Go to W3Schools HTML section">Click here to continue</a>

</body>
</html>