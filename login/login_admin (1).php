<?php 
require 'connect.php';
session_start();
if (isset($_SESSION['email'])) {
    header("Location: dashboard.php");
}

?>

<h1> Log-in Form</h1>
<form action="" method="POST">
	Email:<input type="email" name="email" placeholder="enter your email"><br><br>
	Password:<input type="password" name="pass" placeholder="enter your password"><br><br>
	<input type="submit" name="submit" value="submit"/>
</form>
<?php
if(isset($_POST['submit'])){

	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$sql="SELECT * from adminclient where email = '$email' and password= '$pass'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['pass']=$row['pass'];
		$_SESSION['email']=$row['email'];
		header('location:dashboard.php');

	}
	else{
		echo "you are not registered.please register ";
		echo '<a href="sign_up.php">Click here to Register</a>';

	}


}


?>
