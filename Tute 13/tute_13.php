//Tutorial 13

//Mysql code
CREATE TABLE university.students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

<!DOCTYPE html>
<html>
<head>
  <title>Student Registration Form</title>
</head>
<body>
  <h2>Student Registration Form</h2>
  <form action="process_form.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>


<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$servername = "localhost";
$username = "your_mysql_username";
$password_db = "your_mysql_password";
$dbname = "university";

$conn = new mysqli($servername, $username, $password_db, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO students (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);
$stmt->execute();

$stmt->close();
$conn->close();


header("Location: index.html");
exit();
?>

<?php

$servername = "localhost";
$username = "your_mysql_username";
$password_db = "your_mysql_password";
$dbname = "university";

$conn = new mysqli($servername, $username, $password_db, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM students";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No students found.";
}

$conn->close();
?>


