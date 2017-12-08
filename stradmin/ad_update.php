<?
	include ("dblib.php");
	$url=$_POST['url'];
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if($conn)echo "error!";
	$result=mysqli_query($conn,"update ad set url='$url'");
	mysqli_close($conn);
?>