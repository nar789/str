<html>
<head>
	<meta charset="UTF-8">
	<title>str</title>
	<link rel="stylesheet" type="text/css" href="css/p.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/p.js"></script>
</head>

<body>
	<script>var num='';</script>
	<div id=back>
		<?
			include ("dblib.php");
			$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
			if(!$conn)echo "db connect error.";
			$result=mysqli_query($conn,"select * from p order by rand() limit 1");
			$row=mysqli_fetch_array($result);
			echo "<img src=\"".$row['img']."\" class=back-img>";
			echo "<div class=back-text>".urldecode($row['cmd'])."</div>";
			echo "<script>num='".$row['num']."';</script>";
			mysqli_close($conn);
			echo "<script>ani();</script>";
		?>
		<div class=btn-nav><center>
			<img src=img/btn_no.png class=btn-item onclick="no()">
			<img src=img/btn_call.png class=btn-item onclick="call()"></center>
		</div>
	</div>
	
</body>
</html>