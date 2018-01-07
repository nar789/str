<?
	include ("dblib.php");
	$pfurl=$_POST['pfurl'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$url=$_POST['url'];
	
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	$result=mysqli_query($conn,"insert into m values(null,'$pfurl','$title','$content','$url')");
	mysqli_close($conn);
?>