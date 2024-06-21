<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $number = $_GET['number'];
    $text = $_GET['text'];
    // Do something with the form data
   // echo "<div style='text-align: center; color: blue;'>"; // Opening center-aligned div with blue text color
   // echo "<p style='text-align: center; color: green;'>Name: $name <br>"; // Setting green color for name
   // echo "Email: $email <br>"; // Default color
    //echo "Number: $number <br>"; // Default color
    //echo "Text: $text</p>"; // Default color
    //echo "</div>"; // Closing center-aligned div
}
$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn=new mysqli ($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("conn. failed");
}
    $name = $_GET['name'];
    $email = $_GET['email'];
    $number = $_GET['number'];
    $text = $_GET['text'];

$sql="INSERT INTO `info` (`Sr. no.`, `Name`, `Email`, `Number`, `Text`) VALUES (NULL, '$name', '$email', '$number', '$text')";
if($conn->query($sql)==true)
{
    echo "<h1 style='text-align: center; color: green;'> Send sucessfully  </h1>";
}
else{
    echo"error";
}
$conn->close();

?>
</body>
</html>