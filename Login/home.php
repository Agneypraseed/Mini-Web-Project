<?php

	session_start();	

	require('config/config.php');
	require('config/db.php');

	$id=mysqli_real_escape_string($conn,$_GET['id']);
	
	$query='SELECT * from userdata where id='.$id;
	$result=mysqli_query($conn,$query);
	$username=mysqli_fetch_assoc($result);
	
?>


<?php include('inc/header.php') ?> 
	<center><h1>HOME</h1></center>
	<center><h3>Welcome <?php echo $username['username']; ?></h3></center>	
<?php include('inc/footer.php') ?> 