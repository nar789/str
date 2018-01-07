<?
	include ("dblib.php");
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	
	$result=mysqli_query($conn,"select ban from chat");
	$row=mysqli_fetch_array($result);
	
	echo $row[0];

	mysqli_close($conn);
?>