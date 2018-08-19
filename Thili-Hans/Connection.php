<?php

	//step 1
	$link = mysqli_connect("localhost","root","","misca");

	//var_dump($c);

	//step 2
	#$result = mysqli_query($link,"Select * from tbl_user");
	$result = mysqli_query($link,"Select * from tbl_user where id=1");


	while($row = mysqli_fetch_array($result))
	{
		var_dump($row);
 	}


?>