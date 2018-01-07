<html>
<head>
	<meta charset="UTF-8">
	<title>str</title>
	<link rel="stylesheet" type="text/css" href="css/r.css">
</head>

<body>
	<div class=find onclick="connect()"><img src=img/find.gif class=findimg></div>
	<div class=chatbox></div>
	<div class=ad><?
		include("dblib.php");
		$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
		if(!$conn)echo "error!";
		$ret=mysqli_query($conn,"select * from ad");
		$r=mysqli_fetch_array($ret);
		echo "<img onclick='adclick(\"".$r['url']."\")' class=adimg src=".$r['img'].">";
		mysqli_close($conn);
	?></div>
	<div class=chatinput>
		<div class=new-g><div class=blank></div><img src=img/new.png onclick="connect()" class=new></div><input type=text id=msg class=inputtext placeholder="메세지를 입력하세요."><img src=img/btn_chat.png class=btn onclick='send()'>
	</div>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/r.js"></script>
</body>
</html>