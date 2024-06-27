<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['fname']) &&
        isset($_POST['email']) && isset($_POST['date']) &&
        isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['idCard']) && isset($_POST['address'])) {
           
            $name = $_POST['name'];
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $date=$_POST['date'];
            $date=date('Y-m-d',strtotime($date));
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $idCard = $_POST['idCard'];
            $address = $_POST['address'];


        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "login_register";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM coviddata WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO coviddata(name, fname, email, date, phone, gender, idCard, address) values(?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->bind_param("i", $date);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssiisis",$name, $fname, $email, $date, $phone, $gender, $idCard, $address);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                    echo "Your id is 17" ;
                    
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}


?>