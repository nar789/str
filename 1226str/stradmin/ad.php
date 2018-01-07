<html>
<head>
	<meta charset="UTF-8">
	<title>Member</title>
	<link rel="stylesheet" type="text/css" href="css/ad.css">
</head>
<body>
	<table id='mem'>
		<tr>
			<td>광고사진 640 X 100</td>
			<td>URL</td>
			<td>수정</td>
		</tr>
			<?
				include ("dblib.php");
				$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
				if(!$conn)echo "db connect error.";
				$result=mysqli_query($conn,"select * from ad");
				while($row=mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>";
					echo "<form name=\"upload-form\" action=\"adupload.php\" method=\"post\" enctype=\"multipart/form-data\"><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"25242880\"/>
						<input type=file name=upload id=upload>
						<input type=submit value='이미지업로드'>
						</form>";
					echo "<img class=profile src=".$row['img']." onclick='imgclick(this)'></td>";
					echo "<td><input type=text class=inputtext id=url value=".$row['url']."></td>";
					echo "<td><center><a href=#><div class=btn onclick='update()'>수정</div></a></center></td>";
					echo "</tr>";
				}
				mysqli_close($conn);
			?>
		
	</table>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/ad.js"></script>
</body>
</html>