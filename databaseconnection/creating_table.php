<?php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = 'University';

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$db_1 = 'CREATE TABLE University_name (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Title VARCHAR(255) NOT NULL,
Desc TEXT(1000) NOT NULL,
Image VARCHAR(255),
 FOREIGN KEY (Course_id) REFERENCES Course(Course_ID)
    
)';
    
if ($conn->query($db_1) === TRUE) {
        echo "2. Table MEMBERS created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    
    
$db_2 ='CREATE TABLE Course_id (
Course_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
C_Title VARCHAR(255) NOT NULL,
C_Desc TEXT(1000) NOT NULL,
C_Image VARCHAR(255)  
)';
if ($conn->query($db_2) === TRUE) {
        echo "2. Table MEMBERS created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }


$conn->close();
?>