<?php 
require 'connect.php';
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
//    $salt = "8dC_9Kl?";
//    $encrypted password = md5($pass . $salt);
	$occupation=$_POST['occupation'];
	$username=$_POST['username'];
	$address=$_POST['address'];

	//$repass=$_POST['repass'];
	$sql1="SELECT * from add_admin where email = '$email' and username='$username'";

	$result= mysqli_query($conn,$sql1);
	if( mysqli_num_rows($result) > 0 ){
		
		sleep(1);
		echo "you have already registered ";
		
		header('location:login_admin.php');
	
	
}
	else{
	$sql="INSERT INTO add_admin(username,choice,address,email,password)
	VALUES('$username','$occupation','$address','$email','$pass')";
	if(($conn->query($sql))==TRUE){
		
		echo "logged in";
		header('location:login_admin.php');
	}
	else{
		echo "error in inserting data" ;
	}
}

}


 ?>
 <h2>Register Form</h2>
 <form action="" method="POST">
	username:<input type="text" name="username" placeholder="enter your name"><br><br>
	Choice:<select name="occupation">
			<option value="Student">Student</option>
			<option value="Teacher">Teacher</option>
			<option value="Employee">Employee</option>
	</select><br><br>
	address:<input type="text" name="address" placeholder="enter your address"><br><br>
	Email:<input type="email" name="email" placeholder="enter our email"><br><br>

	Password:<input type="password" name="pass" placeholder="enter your password"><br><br>
	
	<input type="submit" name="submit" value="submit"/>
	<input type="reset" name="reset" value="clear"/>
</form>
