<?php
	include ('admindb.php');

	$sql="SELECT aname,apassword from admin";
	$result = $adb_connection->query($sql);

	if($result->num_rows> 0)
	{
		while ($row = $result->fetch_assoc())
		{
			echo $row['aname']." - ";
			echo $row['apassword']."<br>";		
		}
	}
else
{
	echo 	"no";
}

	

?>
