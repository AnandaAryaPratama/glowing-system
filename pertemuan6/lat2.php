<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];

    $sql = "INSERT INTO myguests (firstname, lastname, email)
    VALUES ('$firstname', '$lastname', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
    }
    
    $conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="lat2.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="firstname" name="firstname" require><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lastname" name="lastname" require><br>
  <label for="lname">Email:</label><br>
  <input type="email" id="email" name="email" require><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "lat2.php".</p>

</body>
</html>