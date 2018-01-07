<?
	include ("dblib.php");
	$id=$_POST['id'];
	$msg=$_POST['msg'];
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	//mysqli_query($conn,"update r set target=null where id=$id");
	$result=mysqli_query($conn,"update r set msg='$msg', upd=1 where id=$id");
	mysqli_close($conn);
?>