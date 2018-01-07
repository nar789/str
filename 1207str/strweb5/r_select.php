<?
	include ("dblib.php");
	$id=$_POST['id'];
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	
	$result=mysqli_query($conn,"select target from r where id=$id");
	$row=mysqli_fetch_array($result);
	$target=$row['target'];
	if($target)
	{
		$result=mysqli_query($conn,"select timestampdiff(second,time,now()) from r where id=$target");
		$row=mysqli_fetch_array($result);
		if($row[0]<=3){
			echo $target;
			mysqli_close($conn);
			return;
		}
	}
	$result=mysqli_query($conn,"select * from r where id!=$id and target is null and timestampdiff(second,time,now())<3 order by rand() limit 1");
	$row=mysqli_fetch_array($result);
	if($row){
			mysqli_query($conn,"update r set target=".$row['id']." where id=$id");
			mysqli_query($conn,"update r set target=".$id." where id=".$row['id']);
			echo $row['id'];
	}else echo '0';
	mysqli_close($conn);
?>