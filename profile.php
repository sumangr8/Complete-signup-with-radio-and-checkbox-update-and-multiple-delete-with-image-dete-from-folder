<?php  
$con=mysqli_connect("localhost","root","","ciproject1");
session_start();
if(!isset($_SESSION["email"]))
{
	header("location:index.php");
}
$email=$_SESSION["email"];
$qry=mysqli_query($con,"select * from signup where email='$email'");
$row=mysqli_fetch_array($qry);
extract($row);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script src="jquery.js"></script>
	<script src="js1.js"></script>
	<script src="js2.js"></script>
</head>
<body>
<div class="container">
	<center>
		<table class="table table-bordered" style="width: 600px;">
			<tr>
				<td rowspan="6"><img src="img/<?php echo $pic; ?>" style='width:300px; height:400px;'></td>
			</tr>
			<tr>
				<td>Name : <?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Email : <?php echo $email; ?></td>
			</tr>
			<tr>
				<td>Gender : <?php echo $gender; ?></td>
			</tr>
			<tr>
				<td>Qualification : <?php echo $qualification; ?></td>
			</tr>
			<tr>
				<td><a href="edit.php?id=<?php echo $id; ?>" class="btn btn-success">Edit</a></td>
			</tr>
		</table>
	</center>
</div>
</body>
</html>