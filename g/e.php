<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</title>
</head>

<body>
<h1>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์) สูตรคูณ for</h1>

<form method="post" action="">
	แม่สูตรคูณ <input type="number" min="2" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form><hr>

<?php
	if (isset($_POST['Submit'])) {
		$m = $_POST['a'];
		for($i=1; $i<=12; $i++){ // m แม่สูตรคูณ i ตัวคูณ	
			$x = $m * $i ;	
?>

	<?=$m;?> x <?=$i;?> = <?=$x;?> <br>
 

<?php } // end for
	} // end if ?>

</body>
</html>