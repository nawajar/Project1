<?
//this file for add new equipment
// receive value 
$back = $_POST["back"];
$em_name = $_POST["em_name"];
$ip_add = $_POST["ip"];
$Community = "public";
$OID_status = "interfaces.ifTable.ifEntry.ifOperStatus";
$OID_member = ".1.3.6.1.2.1.17.4.3.1.1";
$Description = $_POST["description"];
$phy = $_POST["phyadd1"].":";
$phy .= $_POST["phyadd2"].":";
$phy .= $_POST["phyadd3"].":";
$phy .= $_POST["phyadd4"].":";
$phy .= $_POST["phyadd5"].":";
$phy .= $_POST["phyadd6"];
$X = $_POST["X"];
$Y = $_POST["Y"];
$locate = $_POST["locate"];
$Status = "AP";


    //connect to database
	$num = null;
    include("config.php");
	$objConnect = mysql_connect($dbhost,$dbUser,$dbPass) or die("Error Connect to Database");
	$objDB = mysql_select_db($dbName);
	$strSQL1 = "SELECT * FROM equipment WHERE Ip_address = '".$ip_add."' OR Physical_address = '".$phy."'" ;
	$objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
	$num = mysql_num_rows($objQuery1);
	
	if($num > 0){
    @mysql_close($objConnect);	
     
	echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=addequip.php?back=$back&error=Ip or Physical can not Duplicate'>";
	exit();
	}
	
	$strSQL2 = "INSERT INTO chart_cell ";
	$strSQL2 .="(Equipment_id,x,y,Cell_value,Location_id) ";
    $strSQL2 .="VALUES ";
	$strSQL2 .="('".$em_name."','".$X."','".$Y."','".$Status."','".$locate."')";
	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL."]");
	
	$strSQL = "INSERT INTO equipment ";
	$strSQL .="(Em_name,Ip_address,Community,OID_status,OID_member,Description,Location_id,Physical_address) ";
    $strSQL .="VALUES ";
	$strSQL .="('".$em_name."','".$ip_add ."','".$Community."','".$OID_status."','".$OID_member."','".$Description."','".$back."','".$phy."')";
	mysql_query("SET NAMES UTF8");
		
	
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	
if($objQuery && $objQuery2)
{
//if add success redirect to equipment page
echo "Save Done.";
@mysql_close($objConnect);
echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=equipment.php?locate=$back'>";

}
else
{
// if add error show message error
echo "Error Save [".$strSQL."]";
}
@mysql_close($objConnect);



?>