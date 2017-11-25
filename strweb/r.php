<html>
<head>
	<meta charset="UTF-8">
	<title>str</title>
	<link rel="stylesheet" type="text/css" href="css/r.css">
</head>

<body>
	<div class=find onclick="connect()"><img src=img/find.png class=findimg></div>
	<div class=chatbox></div>
	<!--<div class=ad></div>//-->
	<div class=chatinput>
		<div class=new-g><div class=blank></div><img src=img/new.png onclick="connect()" class=new></div><input type=text id=msg class=inputtext placeholder="메세지를 입력하세요."><img src=img/btn_chat.png class=btn onclick='send()'>
	</div>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/r.js"></script>
</body>
</html>