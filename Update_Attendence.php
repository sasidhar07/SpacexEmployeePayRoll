<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT username, COUNT(status) AS no_of_pre FROM attendence WHERE status='Present' GROUP BY username";
$result = mysqli_query($conn, $sql);
echo "<div class='container'>";
echo "List of Employees:";
echo "<br/><br/>";
while ($row = mysqli_fetch_assoc($result)) {
    $count= $row['no_of_pre'];
    $id = $row['username'];
    $update_sql = "UPDATE employee SET `No:Of_Present` = $count WHERE Username = '$id'";
    mysqli_query($conn, $update_sql);

    echo $row['username'];
    echo '<br/>';
}
echo "<div>";
mysqli_close($conn);
?>
<html>

<head>
    <style>
       
        .container{
    display: flex;
    align-items: start;
    justify-content: flex-start;
    padding:20px;
    min-height: 100vh;
    max-height:100%;
    flex-direction: column;
    background-color: black;
    color: white;
    font-size:35px;
    color:white;
    }

    </style>
</head>

</html>