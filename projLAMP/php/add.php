<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Listing</title>
</head>
<body>
    <h1>Added</h1>

<!-- 
    NOTE: this is our backend (server side) code. 
    1. User cannot see this code -- unlike HTML/CSS/JavaScript
    2. This is how we will do database opperations (DB is also on server)
-->    

<?php
// DYNAMIC HTML
$firstname = $_GET['apiFirst'];
$month = $_GET['userMonth'];
echo "<p><strong>$firstname</strong> has been added.</p>";
echo "<p>Current year-month: <strong>$month</strong></p>";


// DATABASE OPERATIONS:
// https://www.w3schools.com/php/php_mysql_insert.asp
$servername = "localhost";
$username = "user46";
$password = "46pong";
$dbname = "db46";

// Create connection (assuming these exist -- we set up the DB on the CLI)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL OPPERATIONS
$sql = "INSERT INTO randuser VALUES ('$firstname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully. <br>New Entry First Name: $firstname.<br><br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sqlShow = "SELECT * FROM randuser";
$results = $conn->query($sqlShow);

if($results->num_rows > 0)
{
  while($row = $results->fetch_assoc())
  {
    echo "First Name: " . $row["usrName"]. "<br>";
  }
}
else
{
  echo "0 Results";
}

$conn->close();

?>

    <br><br>
    <button onclick="history.back()">Back</button>

</body>
</html>
