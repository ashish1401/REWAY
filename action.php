<?php
//server created
$servername = "localhost";
$dbname = "reway technologies";
$username = "root";
$password = "";

//make connection with sql
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("CONNECTION FAILED".$conn->connect_error);
}

$firstname = $_POST['firstname'];
$email=$_POST['email'];
$address=$_POST['address'];
$message = $_POST['message'];
$date = date("Y/m/d");

$sql = "INSERT INTO `contactform` ( `Name`, `Email`, `Address`, `Message`, `Date`) VALUES ('$firstname', '$email', '$address', '$message',current_timestamp())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



$conn->close();
?>

