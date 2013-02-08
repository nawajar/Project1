

<html>
<head>
<META HTTP-EQUIV="Refresh" CONTENT="2;URL=/project1/index.php">
</head>
<body>
<?php
//destroy all sesstion 
@session_start();
@session_destroy();
?>
Redirect..
<img src="images/loading.gif" width="16" height="16">
</body>
</html>