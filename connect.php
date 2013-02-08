<?php
$conn=mysql_connect('127.0.0.1','root','root')or die("Can't connect to database!sss"); 
$db_select=mysql_select_db("project1")or die("ไม่พบข้อมูลที่กำหนด"); 
$cs1="SET character_set_results=utf8";
mysql_query($cs1) or die('Error query'.mysql_error());
$cs2="SET character_set_client=utf8";
mysql_query($cs2) or die('Error query'.mysql_error());
$cs3="SET character_set_connection=utf8";
mysql_query($cs3) or die('Error query'.mysql_error());
?>