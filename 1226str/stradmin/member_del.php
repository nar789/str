<?
	include ("dblib.php");
	$no=$_POST['no'];
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	$result=mysqli_query($conn,"delete from p where id=$no");
	mysqli_close($conn);
?>