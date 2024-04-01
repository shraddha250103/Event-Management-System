<?php
// Connect to database (dummy example)
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "myform";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['participantName'];
$email = $_POST['email'];
$Phonenumber = $_POST['phoneNumber'];

// Insert data into table (dummy example)
$sql = "INSERT INTO myform VALUES (NULL, '$name', '$email', '$Phonenumber')";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost:8080/Event/second.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
