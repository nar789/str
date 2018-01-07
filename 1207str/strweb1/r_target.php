<?
	include ("dblib.php");
	$target=$_POST['target'];
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	
	$result=mysqli_query($conn,"select timestampdiff(second,time,now()) as time,msg,upd from r where id=$target");
	$row=mysqli_fetch_array($result);
	echo "{\"time\":".$row['time'].",\"msg\":\"".$row['msg']."\",\"upd\":".$row['upd']."}";
	mysqli_close($conn);
?>