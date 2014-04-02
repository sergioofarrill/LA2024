<?php 

if (isset*($_POST['submitted'])) {

	include('connect-mysql.php');
	
	$firstname = $POST['firstname'];
	$lasttname = $POST['lastname'];
	$address = $POST['address'];
	$city = $POST['city'];
	$state = $POST['state'];
	$zip = $POST['zip'];
	$email = $POST['email'];
	$cellphone = $POST['cellphone'];
	$sqlinsert ="INSERT INTO people (firstname, lastname, address, city, state, zip, email, cellphone) VALUES ('$firstname', '$lastname', '$address', '$city', '$state', '$zip', '$email', '$cellphone')";
	
	if (!mysqli_query($dbcon, $sqlinsert )){
		die('Error please make sure all required fields are filled');
		} // End of nested if statement
	$newrecord = "1 record added to DB";

} //End of main if statement


?>