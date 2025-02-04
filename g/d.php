<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</title>
</head>

<body>
<h1>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</h1>

<form method="post" action="">
	จำนวน <input type="number" min="1" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form><hr>

<?php
	if (isset($_POST['Submit'])) {
		$count = $_POST['a'];
		echo "แสดงจำนวน $count รูป<br><br>";

		for($i=1; $i<=$count; $i++){		
?>


	<img src="https://i.pinimg.com/736x/62/60/26/626026e865d00cb8140e2e8cfe77b7f0.jpg" width="250">

<?php } // end for
	} // end if ?>

</body>
</html>