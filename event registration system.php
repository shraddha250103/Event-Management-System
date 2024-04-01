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
        form {
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
    <h2>VIAJE</h2>
    <style>
        h2{font-size: 50px;
            font-family: "Arial", sans-serif; }
        
    </style>

    <form action="demo.php" method="post" id="registrationForm">
        <label for="participantName">Participant's Name:</label>
        <input type="text" id="participantName" name="participantName" required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>
        <input type="submit" value="Register">
    </form>
</body>
</html>
