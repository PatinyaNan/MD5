<?php
  $user_name = $_POST["uname"];
  $password1 = $_POST["psw"];
  //echo $user_name." ".$password;
//$str = "nut29333";
$pass = md5($password1);
echo $pass;
//echo md5($password);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "MD5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (user, password)
VALUES ('$user_name', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
