<?
	include ("dblib.php");
	$pfurl=$_POST['pfurl'];
	$phone=$_POST['phone'];
	$content=$_POST['content'];
	
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	$result=mysqli_query($conn,"insert into p values(null,'$pfurl','$content','$phone')");
	mysqli_close($conn);
?>