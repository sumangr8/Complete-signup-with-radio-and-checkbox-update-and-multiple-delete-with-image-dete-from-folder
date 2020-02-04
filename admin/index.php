<?php $con=mysqli_connect("localhost","root","","ciproject1"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<script src="../jquery.js"></script>
	<script src="../js1.js"></script>
	<script src="../js2.js"></script>
</head>
<body>
<div class="container">
	<form method="post" action="">
		<center><input type="submit" name="delete" value="Delete" class="btn btn-success"></center>
		<table class="table table-bordered">
			<tr>
				<td>Select</td>
				<td>name</td>
				<td>Email</td>
				<td>Image</td>
			</tr>
			<?php
			$qry=mysqli_query($con,"select * from signup");
			while($row=mysqli_fetch_array($qry))
			{
				extract($row);
			?>
			<tr>
				<td><input type="checkbox" name="remove[]" value="<?php echo $id; ?>"></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
				<td><img src="../img/<?php echo $pic; ?>" style='width:50px; height: 50px;'></td>
			</tr>
			<?php
			}
			?>
		</table>
	</form>
	<?php
	if(isset($_POST["delete"]))
	{
		extract($_POST);
		$remove=implode(",", $_POST["remove"]);
		$qry=mysqli_query($con,"select * from signup where id in ($remove)");
		while($row=mysqli_fetch_array($qry))
		{
			extract($row);
			unlink("../img/".$pic);
		}

		$qry=mysqli_query($con,"delete from signup where id in ($remove)");
		header("location:index.php");
	}
	?>
</div>
</body>
</html>