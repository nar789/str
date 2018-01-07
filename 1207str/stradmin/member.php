<html>
<head>
	<meta charset="UTF-8">
	<title>Member</title>
	<link rel="stylesheet" type="text/css" href="css/member.css">
</head>
<body>
	<?
		$url=$_GET['url'];
		echo "<script>var pfurl='';</script>";
		if($url)
			echo "<script>pfurl='".$url."';</script>";
	?>
	<table id='gv'>
		<tr>
			<td>프로필사진</td>
			<td>폰번호</td>
			<td>내용</td>
			<td>저장</td>
		</tr>
		<tr>

			<td><form name="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
			<input type=file name=upload id=upload>
			<input type=submit value='이미지업로드'>
			</form><?
				if($url)echo "<center><img class=profile src=\"".$url."\"></center>";
			?></td>
			<td><input type=text class='inputtext' id=phone></td>
			<td><textarea rows=5 cols=40 id=content></textarea></td>
			<td><a href=#><div class=btn onclick='save()'>저장</div></a></td>
		</tr>
	</table>
	<table id='mem'>
		<tr>
			<td>순번</td>
			<td>프로필사진</td>
			<td>폰번호</td>
			<td>내용</td>
			<td>수정</td>
			<td>삭제</td>
		</tr>
			<?
				include ("dblib.php");
				$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
				if(!$conn)echo "db connect error.";
				$result=mysqli_query($conn,"select * from p");
				$cnt=0;
				while($row=mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>";
					echo "<form name=\"upload-form\" action=\"upload.php?no=".$row['id']."&g=".$_GET['g']."\" method=\"post\" enctype=\"multipart/form-data\"><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"25242880\"/>
						<input type=file name=upload id=upload>
						<input type=submit value='이미지업로드'>
						</form>";
					echo "<img class=profile src=".$row['img']." onclick='imgclick(this)'></td>";
					echo "<td><input type=text class=inputtext id=".$cnt."phone value=".$row['num']."></td>";
					echo "<td><textarea rows=5 cols=50 id=".$cnt."content>".urldecode($row['cmd'])."</textarea></td>";
					echo "<td><center><a href=#><div class=btn onclick='update(".$row['id'].",".$cnt.")'>수정</div></a></center></td>";
					echo "<td><center><a href='#'><div class=btn onclick='del(".$row['id'].")'>삭제</div></a></center></td>";
					echo "</tr>";
					$cnt=$cnt+1;
				}
				mysqli_close($conn);
			?>
		
	</table>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/member.js"></script>
</body>
</html>