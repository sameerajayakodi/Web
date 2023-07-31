//Tutorial 12

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

  </style>
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
    <form action="process_form.php" method="post">
      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="fname" required>

      <label for="lname">Last Name:</label>
      <input type="text" id="lname" name="lname" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form Submission</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Registration Form Submission</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];

      echo "<p><strong>First Name:</strong> $fname</p>";
      echo "<p><strong>Last Name:</strong> $lname</p>";
      echo "<p><strong>Email:</strong> $email</p>";
      echo "<p><strong>Phone:</strong> $phone</p>";
    }
    ?>
  </div>
</body>
</html>


