 <!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
     <!DOCTYPE html>
<html>
<head>
</head>
<p>Have <a href="index.php">login</a> with your credentials.</p>
<body>
 
    
</body>
</html>
</body>
</html>



<?php
// Connect to the database
$db = mysqli_connect("localhost","root","","stock");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get user input from the form
$username = $_POST['username'];
$email = $_POST['email'];
$password =$_POST['password']; 

// Insert user data into the database
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->bind_param('sss', $username, $email, $password);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Registration failed: " . $db->error;
}

$stmt->close();
$db->close();
?>

