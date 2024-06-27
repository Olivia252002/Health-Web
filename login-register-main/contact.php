<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	


	// Database connection
	$conn = new mysqli('localhost','root','','login_register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(name, phone, email, message) values(?, ?, ?, ?)");
		$stmt->bind_param("siss", $name, $phone, $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Submittion successfully...";
		$stmt->close();
		$conn->close();
	}
?>