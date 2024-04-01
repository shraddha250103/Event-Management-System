<!DOCTYPE html>
<html lang="en">
<head
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <style>
        body {
         background-image: url('Online-Registration-Tools-Header.png');
         background-size: 100% 100%;
         background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;  
        }
        
        
        h2 {
            text-align: center; /* Align the heading in the center */
        }
        table {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Data</h2>
    <style>
        h2{font-size: 50px;
            font-family: "Arial", sans-serif; }
        
    </style>

    <table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Contact Number</th>
	</tr>
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

	// Retrieve data from table (dummy example)
	$sql = "SELECT * FROM myform";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	// Output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo "<tr>";
        	echo "<td>" . $row['name'] . "</td>";
        	echo "<td>" . $row['email'] . "</td>";
        	echo "<td>" . $row['PhoneNumber'] . "</td>";
        	echo "</tr>";
		
    	}
	echo "<tr>";
    	echo "<td colspan='3' align='center'><a href='event registration system.php'><button>Back</button></a></td>";
    	echo "</tr>";
    	echo "</table>";
	} else {
    	echo "0 results";
	}
	$conn->close();
	?>

</body>
</html>
