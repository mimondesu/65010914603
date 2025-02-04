<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</title>
</head>

<body>
<h1>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</h1>

<form method="post" action="">
	ตัวเลข <input type="number" name="a" min="0" max="100" required autofocus>
    <br>
    ชื่อ-นามสกุล <input type="text" name="b" required>
    <br>
    จังหวัด <select name="province">
    	<option value="ขอนแก่น">ขอนแก่น</option>
    	<option value="มหาสารคาม">มหาสารคาม</option>
    	<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
    	<option value="อุดรธานี">อุดรธานี</option>
    </select>
    <br>
    วันเดือนปีเกิด <input type="date" name="date">
    <br>
    
    <button type="submit" name="submit">OK</button>
    <button type="reset" >ยกเลิก</button>
    <button type="button" onClick="window.print();">พิมพ์</button>
</form>
<hr>

<?php
if(isset($_POST['submit'])){
echo "ตัวเลข:".@$_POST['a']."<br>";
echo "ชื่อ-นามสกุล:".@$_POST['b']."<br>";
echo "จังหวัด:".@$_POST['province']."<br>";
echo "วันเดือนปีเกิด:".@$_POST['date']."<br>";
}
?>

</body>
</html>