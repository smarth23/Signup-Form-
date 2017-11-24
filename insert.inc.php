<?php
	include_once 'dbh.inc.php';

	if(isset($_POST['submit']))
{
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email= $_POST['emailid'];
	$pwd = $_POST['pwd'];
	$phone = $_POST['phone'];

 	$check="SELECT * FROM login WHERE email ='$email'";
 	$rs = mysqli_query($link,$check);
 	if(mysqli_num_rows($rs) > 0) {
		
 		header("Location: ../forgot.php");
 }
	else{
	$query = "INSERT INTO login (firstname,lastname,email,pwd,phone) VALUES ('$first','$last','$email','$pwd','$phone')";
	mysqli_query($link,$query);
	header("Location: ../wel.php");
	 }
}

	
