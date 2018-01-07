<?
	include ("dblib.php");
	$no=$_POST['no'];
	$phone=$_POST['phone'];
	$content=$_POST['content'];
	
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if($conn)echo "error!";
	$result=mysqli_query($conn,"update p set num='$phone',cmd='$content' where id=$no");
	mysqli_close($conn);
?>