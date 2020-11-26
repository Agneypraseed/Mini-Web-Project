<?php
	
	session_start();
	require('config/config.php');
	require('config/db.php');

	$id=mysqli_real_escape_string($conn,$_GET['id']);

	if(isset($_POST['submit']))
	{

		$update_id=mysqli_real_escape_string($conn,$_POST['update_id']);

		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
		$cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);

		if($password===$cpassword)
		{			
		$query = "UPDATE userdata SET 
				  username='$username',password='$password'	
				  where id={$update_id}";

			if (mysqli_query($conn,$query))
			{	
			header('Location: '.ROOT_URL.'home.php?id='.$update_id.'');
			}
			else
			{
			echo 'ERROR:'.mysqli_error($conn);
			}

		}

		else
		{
			echo '<center>PASSWORDS DONOT MATCH</center>';
		}	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/superhero/bootstrap.min.css">
</head>
<body>
		<div class="container">
		<h1>EDIT CREDENDIALS</h1>
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>NEW USERNAME</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>NEW PASSWORD</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label>CONFIRM PASSWORD</label>
				<input type="password" name="cpassword" class="form-control">
			</div>
			<input type="hidden" name="update_id" value="<?php echo $id; ?>">
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form> 
		</div>
</body>
</html>
		
