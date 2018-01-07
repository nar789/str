<?
	include ("dblib.php");
	$id=$_POST['id'];
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	//mysqli_query($conn,"update r set target=null where id=$id");
	$result=mysqli_query($conn,"update r set time=now() where id=$id");
	mysqli_close($conn);
?>