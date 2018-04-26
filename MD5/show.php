<?php
  $user_name = $_POST["uname"];
  $password1 = $_POST["psw"];
  //echo $user_name." ".$password;
//$str = "nut29333";
$pass = md5($password1);
//echo $pass;
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

$sql = "SELECT * from login where password = '$pass'";
$result = mysqli_query($conn, $sql);
//echo $sql;

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" .$row["user"] .  "</td> ";
  $p1 = $row["password"];
  //echo "<td>" .$row["password"] .  "</td> ";
//  echo "<td>" .$row["id"] .  "</td> ";
  //แก้ไขข้อมูล
}
if ($pass == $p1) {
  echo $pass;
}else{
  echo "login inccorect";
}
/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
//if ($conn->query($result) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "login inccorect";
//}


$conn->close();
?>
