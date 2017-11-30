<?php
session_start();
include("dbconnection.php"); //creates database connection

if (isset($_POST["submit"]));

$firstname = $_POST ['firstname'];
$lastname = $_POST ['lastname'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$paymentmethod = $_POST ['paymentmethod'];

//Executes the query
mysqli_query ($connection, "INSERT INTO customers (firstname, lastname, email, password, paymentmethod) VALUES ('$firstname', '$lastname', '$email', '$password', '$paymentmethod')");
if(mysqli_affected_rows ($connection)>0){
	header('Location: index.html');
}
	else {
	echo "<p> There were errors with your registration";
	echo mysqli_error($connection);
	
} 

?>