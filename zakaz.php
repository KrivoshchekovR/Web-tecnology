<html>
	<head>
		<title>�������� �����</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="zakaz.css">
	</head>

	<body>
		<header> 
			<nav align=center>
				<img src = "t.jpg" height=100 width=100></img>
				<ul><a href="index.php">������� ��������</a></ul>
				<ul><a href="contact.php">��������</a></ul>
				<ul><a href="zakaz.php">�������� ������</a></ul>
			</nav>
		</header>
		
		<div align=center>
			<p></p>
			<table align=center>
				<tr><th>������������ ������</th><th>����</th></tr>
				<tr><td>������� �����������</td><td>100 $</td></tr>
				<tr><td>����� �� ��������</td><td>100 $</td></tr>
				<tr><td>��������� ����</td><td>100 $</td></tr>
				<tr><td>������ ������ � ������</td><td>100 $</td></tr>
				<tr><td>��������� ������ � ����</td><td>100 $</td></tr>
				<tr><td>������ ������</td><td>1000 $</td></tr>
			</table>
		</div>
			<form action="handler.php" method="post">
			<input type="text" name="phone" placeholder="�������">
			<input list="lis" name="listbase" placeholder = "�������� ��������">
			<input type="submit" value="���������">
		
			<datalist id="lis">
				<option>��������� ��������</option>
				<option>�� �����</option>
			</datalist> 
		
		<footer>�������� /*���� ��������*/</footer>
	</body>
</html>