<?php
session_start();

if (isset($_SESSION['email'])) {
   
   include 'input.php';
} else {
    echo "<h1>Unauthorized Access !!!</h1>";
    header("Location:login_form.php");
}

?>
<a href="logout_Admin.php"><span style='color:red; font-size:20px; margin-left :50%'>Logout</span></a>