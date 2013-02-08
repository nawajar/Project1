<?php


 $user = $_GET["user"];




    //connection db
    include("config.php");
	$objConnect = mysql_connect($dbhost,$dbUser,$dbPass) or die("Error Connect to Database");
	$objDB = mysql_select_db($dbName);
	    


   // if not in use then delete from database
   $strSQL = "DELETE FROM admin ";
   $strSQL .="WHERE Username = '".$user."'";
   $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

if($objQuery){
	 echo"<h4>Deleted.</h4> <META HTTP-EQUIV=Refresh CONTENT='0; URL=name_admin.php'>";
}
  

	
	?>