<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&family=Itim&family=Mali&family=Noto+Serif+Thai&family=Pattaya&display=swap" rel="stylesheet">

<style>
.mali {
  font-family: "Mali", serif;
  font-weight: 400;
  font-style: normal;
  color:#C39;
}
.mali1 {
  font-family: "Mali", serif;
  font-weight: 400;
  font-style: normal;
}
</style>

</head>

<body>
<h1 class="mali">สมัครสมาชิกชมรม</h1>
<h2 class="mali1">น้ำฝน ดวงจันทร์โชติ (ไดมอนด์)</h2>

<form method="post" action="">
	เพศ
	<input type="radio" name="title" value="ชาย" >ชาย
    <input type="radio" name="title" value="หญิง" >หญิง
    <br>
	ชื่อ-นามสกุล <input type="text" name="name" required>
    <br>
	วันเดือนปีเกิด <input type="date" name="date">
	<br>
	ที่อยู่ <textarea name="address" cols="33" rows="4" required></textarea>
    <br>
    จังหวัด <select name="province">
    	<option value="ขอนแก่น">ขอนแก่น</option>
    	<option value="มหาสารคาม">มหาสารคาม</option>
    	<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
    	<option value="อุดรธานี">อุดรธานี</option>
    </select>
	<br>
    	ระดับการศึกษา <select name="education">
    	<option value="ปริญญาตรี">ปริญญาตรี</option>
    	<option value="ปริญญาโท">ปริญญาโท</option>
    	<option value="ปริญญาเอก">ปริญญาเอก</option>
        </select>
	<br>    
	เบอร์โทรศัพท์ <input type="text" name="phonenumber" required>
	<br>
	๊ีี๊Username<input type="text" name="user" required>
    <br>
	Password <input type="password" name="pass" required> 
    <br><br>

    <button type="submit" name="submit">สมัครสมาชิก</button>
    <button type="reset" >ยกเลิก</button>
    <button type="button" onClick="window.print();">พิมพหน้านี้์</button>   
</form>

<hr>

<?php
if(isset($_POST['submit'])){
echo "เพศ: ".@$_POST['title']."<br>";
echo "ชื่อ-นามสกุล: " .@$_POST['name']."<br>";
echo "วันเดือนปีเกิด: " .@$_POST['date']."<br>";
echo "ที่อยู่: ".@$_POST['address']."<br>";
echo "จังหวัด: ".@$_POST['province']."<br>";
echo "ระดับการศึกษา: ".@$_POST['education']."<br>";
echo "เบอร์โทรศัพท์: ".@$_POST['phonenumber']."<br>";
echo "Username: ".@$_POST['user']."<br>";
echo "Password: ".@$_POST['pass']."<br>";
}
?>

	
</body>
</html>