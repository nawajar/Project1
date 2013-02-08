<?php
// include config for connect database
include("config.php");
// receive user , password from login page
$userName = $_POST["userName"];
$passWord = $_POST["passWord"];


//connect database check user , password is exist in table admin?
$objConnect = mysql_connect($dbhost,$dbUser,$dbPass) or die("Error Connect to Database");
// select database 
$objDB = mysql_select_db($dbName);
//sql for query database
$strSQL = "SELECT * FROM admin WHERE Username = ";
$strSQL .= "'".$_POST["userName"]."'";
$strSQL .= "AND Password = '".$_POST["passWord"]."' ";
//do run query
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
//get number of rows
$num = mysql_num_rows($objQuery);

while($objResult = mysql_fetch_array($objQuery))
{
//get status
$status = $objResult["status"];

}


/*if got user , pass word in Database then create session*/
if($num > 0){
session_start();
$_SESSION["sesID"] = session_id();
$_SESSION["userName"] = $userName;
$_SESSION["passWord"] = $passWord;
// map user role admin or user
if($status == 1){
$_SESSION["status"] = "Admin";
}else{
$_SESSION["status"] = "User";
}
//close session , close db connection
session_write_close();
mysql_close($objConnect);
//redirect to manage page
header("Location:/project1/manage.php");

}else{
// close db connection case not found user
mysql_close($objConnect);
// if not exist in table admin then redirect to login page and send message error 
header("Location:/project1/admin.php?error=Username or Password Invalid!");


}




?>