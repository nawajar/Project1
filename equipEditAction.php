<?
//this file for edit equipment
//receive value for edit 
$id = $_POST["id"];
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

    //connect to database and put value
    include("config.php");
	$objConnect = mysql_connect($dbhost,$dbUser,$dbPass) or die("Error Connect to Database");
	$objDB = mysql_select_db($dbName);
	$strSQL = "UPDATE equipment SET ";
    $strSQL .="Em_name = '".$em_name."' ";
    $strSQL .=",Ip_address = '".$ip_add."' ";
    $strSQL .=",Ip_address = '".$ip_add."' ";
    $strSQL .=",Ip_address = '".$ip_add."' ";
    $strSQL .=",Description = '".$Description."' ";
	$strSQL .=",Physical_address = '".$phy."' ";
	
    $strSQL .="WHERE Equipment_id = '".$id."' ";
	 mysql_query("SET NAMES UTF8");
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

    $strSQL1 = "UPDATE chart_cell SET ";
    $strSQL1 .="x = '".$X."' ";
	$strSQL1 .=",y = '".$Y."' ";
	$strSQL1 .="WHERE Equipment_id = '".$em_name."' ";
    $objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");

	
if($objQuery && objQuery1)
{
// if edit success then back 
echo "Save Done.";
@mysql_close($objConnect);
echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=equipment.php?locate=$back'>"; 
//header("Location:/project1/equipment.php?locate=$back");
}
else
{
// if error show message error
echo "Error Save [".$strSQL."]";
}
@mysql_close($objConnect);



?>