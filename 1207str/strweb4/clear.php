<?
	include ("dblib.php");
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	
	$result=mysqli_query($conn,"delete from r where timestampdiff(second,time,now())>3");

	mysqli_close($conn);
?>