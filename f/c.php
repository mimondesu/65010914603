<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</title>
</head>

<body>
	<h1>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</h1>
    
<?php
	$student1 = 75 ;
	$student2 = 60 ;
	$student3 = 82 ;
	$student4 = 59 ;
	$student5 = 64 ;
	
	$sum = $student1 + $student2 + $student3 + $student4 + $student5 ;
	$average =  ($student1 + $student2 + $student3 + $student4 + $student5)/5;
	
	echo "นิสิตคนที่ 1 ได้คะแนน {$student1} <br> " ;
	echo "นิสิตคนที่ 2 ได้คะแนน {$student2} <br> " ;
	echo "นิสิตคนที่ 3 ได้คะแนน {$student3} <br> " ;
	echo "นิสิตคนที่ 4 ได้คะแนน {$student4} <br> " ;
	echo "นิสิตคนที่ 5 ได้คะแนน {$student5} <br> " ;
	echo "ผลรวมของคะแนนสอบ {$sum} <br> " ;
	echo "คะแนนเฉลี่ย $average ";
	
?>	     
    
</body>
</html>