<?php
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$date=date('Y-m-d',strtotime($_POST['date']));
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$idCard = $_POST['idCard'];
	$address = $_POST['address'];

	// Database connection
	$conn = new mysqli('localhost','root','','login_register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into coviddata(name, fname, email, date, phone, gender, idCard, address) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiisis", $name, $fname, $email, $date, $phone, $gender, $idCard, $address);
		$execval = $stmt->execute();
		echo $execval;
		echo "Submittion successfully...";
		$stmt->close();
		$conn->close();
	}
?>