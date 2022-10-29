<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" crossorigin="anonymous"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3">
    <title>User Listing</title>
</head>
<body>
    <h1 class='display-1 m-3'>Database Table</h1>
    <p class='display-5 ms-5 mt-2'>Newly Added</p>
<!-- 
    NOTE: this is our backend (server side) code. 
    1. User cannot see this code -- unlike HTML/CSS/JavaScript
    2. This is how we will do database opperations (DB is also on server)
-->    

<?php
// DYNAMIC HTML
$firstname = $_GET['apiFirst'];
$lastname = $_GET['apiLast'];
$country = $_GET['apiCountry'];
$month = $_GET['userMonth'];
//echo "<p>Current year-month: <strong>$month</strong></p>";


// DATABASE OPERATIONS:
// https://www.w3schools.com/php/php_mysql_insert.asp
$servername = "localhost";
$username = "user46";
$password = "46pong";
$dbname = "db46";

// Create connection (assuming these exist -- we set up the DB on the CLI)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
  die("<p class='bg-danger'>Connection failed: </p>" . $conn->connect_error);
}

// SQL OPPERATIONS
$sql = "INSERT INTO randuser2 (nameFirst, nameLast, nameCountry) VALUES ('$firstname', '$lastname', '$country')";
$sqlCatch = "SELECT 'nameFirst' FROM randuser2 WHERE nameFirst='$firstname'";
//Boolean $sqlCatchValue = FALSE;

// if($sqlCatch->$num_rows > 0) 
// {
//   $sqlCatchValue = TRUE;
//   echo "Data Entry is Present <br>";
// }
echo "<div class='container w-55 ms-5 me-5'>";
echo "<div class='row justify-content-center'>";

echo "<div class='col-6 bg-primary border rounded'><strong>$firstname</strong> is added.</div>";

if($conn->query($sql) === TRUE)
{
  echo "<div class='col-6 bg-success border rounded'>New record created successfully.</div>";
} 
else 
{
  echo "<p class='bg-danger'>Error: </p>" . $sql . "<br>" . $conn->error;
}

echo "</div>";
echo "</div>";


$sqlShow = "SELECT * FROM randuser2";
$results = $conn->query($sqlShow);

//Start Tables
echo "<div class='container w-55 ms-5 me-5'>";
    echo "<div class='row justify-content-center border-bottom border-dark ms-3 me-3'>";
    echo "<div class='col-4'><strong>First Name</strong></div>";
    echo "<div class='col-4'><strong>Last Name</strong></div>";
    echo "<div class='col-4'><strong>Country</strong></div>";
    echo "</div>";

if($results->num_rows > 0)
{
  while($row = $results->fetch_assoc())
  {
    echo "<div class='row justify-content-center border-bottom border-dark ms-3 me-3'>";
    echo "<div class='col-4'>" . $row["nameFirst"]. "</div>";
    echo "<div class='col-4'>" . $row["nameLast"]. "</div>";
    echo "<div class='col-4'>" . $row["nameCountry"]. "</div>";
    echo "</div>";
  }
}
else
{
  echo "0 Results";
}

echo "</div>";

//End Tables

$conn->close();

?>

    <br><br>
    <button class='btn btn-primary m-3' onclick="history.back()">Back</button>

</body>

<footer class='blockquote-footer'>
 
  <h3 class='display-5'>Database View</h3>
  <p>The current document is filled out by Jace Zavarelli and Co.</p>

</footer>

</html>
