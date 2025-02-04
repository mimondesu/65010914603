<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</title>
</head>

<body>
<h1>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์) </h1>

<form method="post" action="">
	รหัสนิสิต <input type="text"  name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form><hr>

<?php
	if (isset($_POST['Submit'])) {
		$std = $_POST['a'];
		$y = substr ($std,0,2);
		echo "<img src='http://202.28.32.211/picture/student/{$y}/{$std}.jpg' width='150'>" ;
	}
	
?>



</body>
</html>