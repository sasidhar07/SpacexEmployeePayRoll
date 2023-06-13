<?php
session_start();
echo "Your Payroll ".$_SESSION['username'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="mydatabase";

$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>
<?php
$employee_id = $_SESSION['username']; 
$sql = "SELECT * FROM employee WHERE username = '$employee_id'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payroll for Employee <?php echo $employee_id; ?></title>
	<style>
		td{
			color:red;
			
		}
		table,td,th{
			border:2px solid black;
			border-collapse:collapse;
			width:100vw;
		}
		.button_do{
			padding:10px;
			background-color:black;
			color:white;
			border-radius:10px;
		}
		h1{
			background-color:black;
			color:white;
			text-align:center;
			height:13vh;
			
		}
		th{
			background-color:black;
			color:white;
		}
		td{
			text-align:center;
		}
		img{
			weight:20vw;
		    height:30vh;
			
			border-radius:50%;
			padding:2%;
			margin-left:40%;
		}
		#btn{
			margin-left:50%;
		}
	</style>
</head>
<body>
	<h1>Hello <?php echo $employee_id; ?></h1>

	<table>
		<tr>
			<th>Surname</th>
			<th>Name</th>
			<th>Present</th>
			<th>GST</th>
			<th>Working Hours</th>
			<th>Salary</th>
			<th>Salary After cuttings</th>



			
		</tr>
		<?php 
		$employee_id = $_SESSION['username'];
		
		
		
		while($row = mysqli_fetch_assoc($result)) { ?>
	    
		<tr>
			<td><?php echo $row["Surname"]; ?></td>
			<td><?php echo $row["Username"]; ?></td>
			
			<td><?php echo $row["No:Of_Present"]; ?></td>
			<td>5%</td>

			<td><?php echo $row["No:Of_Present"]*8;?></td>
			<td><?php echo $row["salary"]; ?></td>

			<td><?php if(intval($row["No:Of_Present"]*($row["salary"]/30))<$row["salary"]){
				echo intval($row["No:Of_Present"]*($row["salary"]/30)); 
			}
			else{
				echo $row["salary"];
			}
			?></td>
            
		</tr>
		<?php } ?>
	</table><br><br>
	<button onclick="change()" class="button_do" id="btn">Download</button>
	
	<script>
		function change(){
			window.print();
		}
	</script>
</body>
</html>
