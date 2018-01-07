<html>
<head>
	<meta charset="UTF-8">
	<title>str</title>
	<link rel="stylesheet" type="text/css" href="css/m.css">
</head>

<body>
	<?
		include ("dblib.php");
		$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
		if(!$conn)echo "db connect error.";
		$result=mysqli_query($conn,"select * from m");
		while($row=mysqli_fetch_array($result))
		{
			echo "<div class=item>";
			echo "<img src=\"".$row['img']."\">";
			echo "<div class=sub>";
			echo "<p class=title>".urldecode($row['title'])."</p>";
			echo "<p class=content>".urldecode($row['cmd'])."</p>";
			echo "</div>";
			echo "<div class=btn onclick='btnclick(\"".$row['url']."\")'>바로가기</div>";
			echo "</div>";
		}
		mysqli_close($conn);
	?>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/m.js"></script>
</body>
</html>