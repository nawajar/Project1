<html>

<head>
<meta http-equiv="Content-Language" content="th">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<title>ตัวอย่างแบบที่ 1 : แสดงในหน้าที่เป็นนามสกุล .php</title>
</head>

<body topmargin="0" leftmargin="0" bgcolor="#CCFFFF">

<p align="center">&nbsp;</p>

<p align="center"><b><font face="MS Sans Serif" size="2" color="#000080">
เป็นแบบด้านล่างนี้ครับ ต้องใช้ในหน้าที่มีนามสกุลเป็น .php เท่านั้น ถ้าไปใส่ในที่เป็น .html จะไม่แสดง</font></b></p>
<center>
<!-- แก้ไขข้อความ + รูปแบบได้ ที่ด้านล่างครับ -->
<?php $ip=$_SERVER['REMOTE_ADDR']; 
echo "<b><font face=\"MS Sans Serif\" size=\"1\" color=\"#000080\">IP Address ของคุณคือ $ip</font></b>";  ?>
</center>
</body>

</html>