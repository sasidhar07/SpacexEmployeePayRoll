<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "mydatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "";

$department = $_SESSION['sel_course'];
echo '<div class="container">';
echo "Attendance sheet for department  ";
echo $department;
echo '<br><br>';

// Step 2: Retrieve data from your database
$sql = "SELECT * FROM employee where department = '$department'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<form method='post' action='#'>";
    echo "<div>";
    echo "<label for='date'>Date:</label>";
    echo "<input type='date' name='date' id='date' required><br><br>";
    echo "</div>";
    echo "<table class='table'>";
    echo "<tr><th>surname</th><th>UserName</th><th>Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["Surname"] . "</td><td>" . $row["Username"] . "</td><td>" .
            "<select name='" . $row['Username'] . "'><option value='Present'>Present</option><option value='Absent'>Absent</option></select>" .
            "</td></tr>";
    }
    echo "</table><br><br>";
    echo "<input type='submit' value='post' class='button' name='submit'>";
    echo "</form>";
}
echo '</div>';
?>

<html>

<head>
    <style>
        .table,
        th,
        td {
            border: 1px solid white;
            border-collapse: collapse;
            color:white;
            padding:20px

        }

        td,
        th {
            padding: 2px 20px;
            text-align: center;
        }
        .container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    max-height:100%;
    flex-direction: column;
    background-color: black;
    color: white;
    font-size:35px;
    color:white;
    }
    .button{
    padding:10px;
    border-radius:10px;
    background-color:white;
    min-width:10vh;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    
}
    </style>
</head>

</html>

<?php

if (isset($_POST['submit'])) {
    $department = strtolower($department);
    $date = $_POST['date'];

    $sql = "SELECT * FROM employee WHERE department = '$department'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $student_id = $row['Username'];
        $status = $_POST[$row['Username']];
        $sql3 = "INSERT INTO attendence(username, date, status) VALUES ('$student_id','$date','$status')";
        mysqli_query($conn, $sql3);
       
        header("location:Update_Attendence.php");
    }
    echo "Attendance posted successfully!";
}
?>