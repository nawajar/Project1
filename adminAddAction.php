<?

$user = $_POST["u_name"];
$pass = $_POST["p_pass"];
$name = "Admin";
$status = 1;

if(is_null($user) || is_null($pass) || $user == ""){

echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=add_admin.php?error=Username or Password is Invalid'>";
exit();

}

//connect to database
	$num = null;
    include("config.php");
	$objConnect = mysql_connect($dbhost,$dbUser,$dbPass) or die("Error Connect to Database");
	$objDB = mysql_select_db($dbName);
	$strSQL1 = "SELECT * FROM admin WHERE Username = '".$user."'" ;
	$objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
	$num = mysql_num_rows($objQuery1);
	
	if($num > 0 ){
    @mysql_close($objConnect);	
     
	echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=add_admin.php?error=Username or Password is Duplicate'>";
	exit();
	}
	
	$strSQL2 = "INSERT INTO admin ";
	$strSQL2 .="(Username,Password,Name,status) ";
    $strSQL2 .="VALUES ";
	$strSQL2 .="('".$user."','".$pass."','".$name."','".$status."')";
	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL."]");
	mysql_query("SET NAMES UTF8");
		
	
	
	
if($objQuery2)
{
//if add success redirect to equipment page
echo "Save Done.";
@mysql_close($objConnect);
echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=add_admin.php?error=Add admin successfull.'>";

}
else
{
// if add error show message error
echo "Error Save [".$strSQL."]";
}
@mysql_close($objConnect);













?>