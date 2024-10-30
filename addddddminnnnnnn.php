<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
        .message {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Record</h2>

    <?php
    // Database connection details
    $servername = "localhost";
    $username = "shsafricanet_shsadminn";
    $password = "S@toshi19";
    $dbname = "shsafricanet_shsadmin";
    $id = 1; // Record ID to edit

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("<div class='message'>Connection failed: " . $conn->connect_error . "</div>");
    }

    // Initialize variables for form fields
    $name = $email = $phone = $address = $age = "";

    // Fetch existing record data
    $sql = "SELECT name, email, phone, address, age FROM home WHERE 1 = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = htmlspecialchars($row["name"]);
        $email = htmlspecialchars($row["email"]);
        $phone = htmlspecialchars($row["phone"]);
        $address = htmlspecialchars($row["address"]);
        $age = htmlspecialchars($row["age"]);
    }

    // Update record upon form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $age = $_POST["age"];

        // Update data in the 'home' table for id=1
        $sql = "UPDATE home SET name='$name', email='$email', phone='$phone', address='$address', age='$age' WHERE 1=$id";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='message'>Record updated successfully</div>";
        } else {
            echo "<div class='message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }

    // Close connection
    $conn->close();
    ?>

    <!-- Form with pre-filled values for editing -->
    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address; ?>" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="<?php echo $age; ?>" required>
        </div>
        <button type="submit" class="submit-btn">Update</button>
    </form>
</div>

</body>
</html>
