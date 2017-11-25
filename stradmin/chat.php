<html>
<head>
	<meta charset="UTF-8">
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="css/member.css">
</head>
<body>
	<table id='gv'>
		<tr>
			<td>금지단어를 입력해주세요.(쉼표로 구분)</td>
			<td>저장</td>
		</tr>
		<tr>
			<td><textarea rows=5 cols=40 id=content></textarea></td>
			<td><a href=#><div class=btn onclick='save()'>저장</div></a></td>
		</tr>
	</table>
	<table id='mem'>
		<tr>
			<td>순번</td>
			<td>금지단어들</td>
			<td>수정</td>
		</tr>
			<?
				include ("dblib.php");
				$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
				if(!$conn)echo "db connect error.";
				$result=mysqli_query($conn,"select * from chat");
				$cnt=0;
				while($row=mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td><textarea rows=5 cols=50 id=".$cnt."content>".urldecode($row['ban'])."</textarea></td>";
					echo "<td><center><a href=#><div class=btn onclick='update(".$row['id'].",".$cnt.")'>수정</div></a></center></td>";
					echo "</tr>";
					$cnt=$cnt+1;
				}
				mysqli_close($conn);
			?>
		
	</table>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/chat.js"></script>
</body>
</html>