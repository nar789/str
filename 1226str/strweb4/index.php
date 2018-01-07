<html>
<head>
	<meta charset="UTF-8">
	<title>str</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<div class=nav>
		<div id=nav-back></div>
		<div class=nav-blank></div>
		<div class=nav-items>
			<center>
				<div id=n1 class=nav-item onclick='navclick(1)'>폰팅</div>
				<div id=n2 class=nav-item onclick='navclick(2)'>랜덤채팅</div>
				<div id=n3 class=nav-item onclick='navclick(3)'>미팅</div>
			</center>
		</div>
		<!--
		<img src=img/nav.png id=nav-back>
		<div class=nav-blank></div>
		<div class=nav-items>
			<center>
				<img src=img/p.png id=n1 class=nav-item onclick='navclick(1)'><img src=img/r1.png id=n2 class=nav-item onclick='navclick(2)'><img src=img/m1.png id=n3 class=nav-item  onclick='navclick(3)'>
			</center>
		</div>//-->
	</div>
	<iframe src="p.php" id=p1></iframe>
	<iframe src="r.php" id=p2></iframe>
	<iframe src="m.php" id=p3></iframe>
	
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>