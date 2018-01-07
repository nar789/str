<?
	include ("dblib.php");
	$no=$_POST['no'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$url=$_POST['url'];
	
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if($conn)echo "error!";
	$result=mysqli_query($conn,"update m set url='$url',cmd='$content',title='$title' where id=$no");
	mysqli_close($conn);
?>