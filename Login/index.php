<?php

	require('config/config.php');
	require('config/db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/journal/bootstrap.min.css">
</head>
<body>
	<center>
	<div class="container">	
	<h1>Faculty Login</h1>	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
			<label>USERNAME</label>
			<input type="text" name="username" placeholder="Enter Username" >
		</div>
		<div class="form-group">
			<label>PASSWORD</label>	
			<input type="password" name="password" placeholder="Enter Password" >
		</div>	
		<input type="submit" name="submit" value="Login" class="btn btn-primary">
	</form>
	</div>
	</center>
</body>
</html>

<?php

			if(isset($_POST['submit']))
			{
				$username=mysqli_real_escape_string($conn,$_POST['username']);
				$password=mysqli_real_escape_string($conn,$_POST['password']);

				$query=" SELECT * from userdata where username='$username' and password='$password' ";

				$result=mysqli_query($conn,$query);

				if($result)
				{
					if(mysqli_num_rows($result)>0)
					{
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

						session_start();	

						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						
						header('Location: '.ROOT_URL.'home.php?id='.$row['id'].'');

					}
					else
					{
						echo "<center> INVALID CREDENDIALS </center>";
					}
					
				}	
				else
				{
				echo 'ERROR:'.mysqli_error($conn);
				}	
		



			}


?>
