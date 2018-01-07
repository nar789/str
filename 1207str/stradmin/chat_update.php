<?
	include ("dblib.php");
	$no=$_POST['no'];
	$content=$_POST['content'];
	
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if($conn)echo "error!";
	$result=mysqli_query($conn,"update chat set ban='$content' where id=$no");
	mysqli_close($conn);
?>