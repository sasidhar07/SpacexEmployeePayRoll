<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="mydatabase";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  $query = "SELECT * FROM employee WHERE Username='$username' AND Password='$password'";
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['username'] = $username;
    header('Location: My_Project_Employee_Intro2.html');
    exit();
} else {
    echo "Invalid username or password.";
    
}

}
?>
