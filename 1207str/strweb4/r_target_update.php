<?
	include ("dblib.php");
	$target=$_POST['target'];
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	$result=mysqli_query($conn,"update r set msg='', upd=0 where id=$target");
	mysqli_close($conn);
?>