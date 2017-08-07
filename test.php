<?php
	$name = $_POST["f-name"];
	$email = $_POST["e_mail"];
	$URL = $_POST["web-url"];
	$work = $_POST["rad"];
	$cover_letter = $_POST["comment"];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "form";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO student_form (Name, Email, WebAddress, Cover_letter, Work)
	VALUES ('$name', '$email', '$URL', '$cover_letter', '$work')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>