<?php

session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db="mydatabase";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
$id=$_SESSION['username'];
$sql = "SELECT DISTINCT department FROM employee";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Login</title>
    <style>
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    flex-direction: column;
    background-color: black;
    color: white;
    font-size:40px;
    }
label{
    margin-right:10px;
}
form{
    display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  
}
h1{
    font-size:50px;
}
.button{
    padding:10px;
    border-radius:10px;
    background-color:white;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Department</h1>
        <form method="POST">
        <div>
        <label>Department</label>
            <select name="department_select">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    
                    <option value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
                <?php } ?>
            </select>
        </div>
            <br>
            <input type="submit" class="button" name="submit">
        </form>
    </div>

    <?php 
    if(isset($_POST['submit']))
    {
        $_SESSION['sel_course']=$_POST["department_select"]; 
        echo $_POST['department_select']; 
        header('location:Give_Attendence.php');
    }?>

   
  

</body>
</html>