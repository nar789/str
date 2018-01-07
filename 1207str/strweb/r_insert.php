<?
	include ("dblib.php");
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	$ran=mt_rand();
	$result=mysqli_query($conn,"insert into r values(null,null,now(),'',0,$ran)");
	$result=mysqli_query($conn,"select id from r where r=$ran order by time desc limit 1");
	$row=mysqli_fetch_array($result);
	echo $row['id'];
	mysqli_close($conn);
?>