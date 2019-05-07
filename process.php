<?php
$username = $_POST['user'];
$password = $_POST['pass'];

$con=mysqli_connect("localhost","root","","login");
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);


$result= mysqli_query($con,"SELECT * FROM register where username = '$username' AND password='$password'" )
or die("failde to query database".mysqli_error($con));
$row =mysqli_fetch_array($result);
if (($row['username']==$username) && ($row['password']==$password ))
{

	session_start();
// Set session variables
$_SESSION["name"] = $username;
$_SESSION["word"] = $password;
setcookie("user", $row['name'], time() + (86400 * 30)); 
setcookie("pass", $row['word'], time() + (86400 * 30)); 
echo "Session variables are set.";
  header('Location: index2.php');
}

else
{
	echo "failed to login password or email is Invalid"; 
	
}
?>