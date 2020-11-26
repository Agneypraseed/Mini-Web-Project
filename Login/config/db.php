<?php

	//Create Connection
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	//check Connection
	if(mysqli_connect_errno())
	{
		//connecton failed
		echo " FAILED ".mysqli_connect_errno();
	}

?>