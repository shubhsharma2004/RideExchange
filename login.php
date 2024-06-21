<!DOCTYPE html>
<html lang="en"><head>
    <style>
        body{
            background-color:"black";
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_GET['email'];
    $password = $_GET['password'];
  //   Do something with the form data
  //  echo "<div style='text-align:center; color: blue;'>";
    //echo "email: $email <br>";
    //echo "password: $password <br>";
    //echo "</div>";
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
$email=$_GET['email'];
$password=$_GET['password'];

$sql="INSERT INTO `login` (`Sr. no.`, `Email`, `Password`) VALUES (NULL, '$email', '$password')";
if($conn->query($sql)==true)
{
    echo "<h1 style='text-align: center; color: green;'> login sucessfully  </h1>";
}
else{
    echo"error";
}
$conn->close();

?>
</body>
</html>