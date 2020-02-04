<?php  $con=mysqli_connect("localhost","root","","ciproject1"); ?>
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
		<!-- Insert Form Start-->
		<form method="post" action="" enctype="multipart/form-data" style="width: 500px; float: left;">
			<div class="form-group">
				<label>Name : </label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Email : </label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password : </label>
				<input type="text" name="password" class="form-control">
			</div>

			<div class="form-group-inline">
				Gender : <input type="radio" name="gender" value="Male" >Male
						 <input type="radio" name="gender" value="Female" >Female	
			</div>
			<div class="form-group-inline">
				Qualification : 
				<input type="checkbox" name="qualification[]" value="MCA">MCA
				<input type="checkbox" name="qualification[]" value="BCA">BCA
				<input type="checkbox" name="qualification[]" value="B.Tech">B.Tech
			</div>
			<div class="form-group">
				<label>Image : </label>
				<input type="file" name="pic" class="form-control">
			</div>

			<input type="submit" name="s" value="Insert" class="btn btn-success">
			<span>
				<?php
				if(isset($_GET["insert"]))
				{
					echo "<h3>Sucesss</h3>";
				}
				?>
			</span>
		</form>
		<?php
		if(isset($_POST["s"]))
		{
			extract($_POST);
			$qualification=@implode(",", $_POST["qualification"]);
			$pic=$_FILES["pic"]["tmp_name"];
			$destination="img/".$_FILES["pic"]["name"];
			if(move_uploaded_file($pic, $destination))
			{
				$pic=$_FILES["pic"]["name"];
			}

			$pic_name=$_FILES["pic"]["name"];//demo.jpg
			$pic_array=explode(".", $pic_name);//
			$extenson=$pic_array[1];
			$valid=array("jpg","png","gif");
			if(in_array($extenson, $valid))
			{
				$qry=mysqli_query($con,"INSERT INTO `signup`(`name`, `email`, `password`, `qualification`, `pic`, `gender`) VALUES ('$name','$email','$password','$qualification','$pic','$gender')");
				if($qry)
				{
					header("location:index.php?insert");
				}
			}
		}
		?>

		
<!--  Insert Form Emd -->

	<!-- Login Form start -->
		<form method="post" action="" style="width: 500px; float: right; ">
			<div class="form-group">
				<label>Email : </label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password : </label>
				<input type="text" name="password" class="form-control">
			</div>
			<input type="submit" name="login" value="login" class="btn btn-warning">
		</form>
		
		<?php
		if(isset($_POST["login"]))
		{
			extract($_POST);
			$qry=mysqli_query($con,"select * from signup where email='$email' and password='$password'");
			$row=mysqli_fetch_array($qry);
			if($row)
			{
				session_start();
				$_SESSION["email"]=$email;
				header("location:profile.php");
			}
		}
		?>
	<!-- Login Form End -->



	</div>
</body>
</html>