<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "phpmyadmin";
$conn = mysqli_connect($servername, $username, $password, $databasename);

//check connection
if  (mysqli_connect_errno()){
    echo "failed connection";
}else{
    echo "connected successfully";
}

if(isset($_POST['add'])){
    $Hospital_name = $_POST['hospitalname'];
    $Email = $_POST['email'];
    $phone_number = $_POST['phonenumber'];
    $Staff_number = $_POST['staffnumber'];
    $Location = $_POST['location'];
    
$sql = "INSERT INTO add_hospitals (hospital_name, email, phone_number, staff_number,location) 
VALUES ( '$Hospital_name', '$Email','$phone_number','$Staff_number','$Location')";
if ($conn->query($sql) === TRUE){
   echo "Insertedsuccessfully";
}
}