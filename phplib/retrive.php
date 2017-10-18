<?php
	require_once 'dbconfig.php';

	

	$sql = "select * from members";
	$result = $conn->query($sql);
	//var_dump($result);

	while ($row = mysqli_fetch_assoc($result)) 
	{
		//var_dump($row);
		echo $row['id'] . " : " . $row['fname'] . " : " . $row['lname'] . " : " . $row['contact'] . "<br>";
		echo "<dr>";
	}
	$conn->close();
?>