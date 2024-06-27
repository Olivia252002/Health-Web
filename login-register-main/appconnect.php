<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$date=date('Y-m-d',strtotime($_POST['date']));
	


	// Database connection
	$conn = new mysqli('localhost','root','','login_register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into app(name, phone, email, date) values(?, ?, ?, ?)");
		$stmt->bind_param("sisi", $name, $phone, $email, $date);
		$execval = $stmt->execute();
		echo $execval;
		echo "Submittion successfully...";
		echo "Your id is 5";
		$stmt->close();
		$conn->close();
	}
?>