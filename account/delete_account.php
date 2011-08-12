<?php
require("../library/duration.php");
?>
<html>
<link href="../style/design.css" rel="stylesheet" type="text/css"/>
<head>
		<style type="text/css" title="currentStyle">
			@import "../style/demo_table.css";
		</style>
		<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery.fn.dataTableExt.aTypes.push(
				function ( sData ) {
					return 'html';
				}
			);
			
			$(document).ready(function() {
				$('#example').dataTable();
			} );
		</script>
</head>
<body>
<script>
    function doCheck(){
        if(document.form1.pid.value==""){
        alert("Please select a project name!");
        return false;
        }
    }
</script>
<fieldset>
<legend>DELETE USER ACCOUNT</legend>
<form name="form1" action="hdelete_account.php" method="POST" onsubmit="return doCheck()">
<table>
<tr>
<td>Account Email</td>
<td>: <select name="pid" style="width:60mm">
<option value=""> - SELECT EMAIL ADD -</option>
<?php
require("../library/connection.php");

$sql = "SELECT DISTINCT email FROM users";
$result = mysql_query($sql,$con);

if ($myrow = mysql_fetch_array($result)){
do {

?>
	<option value="<?php printf("%s",$myrow["email"]); ?>"><?php printf("%s",$myrow["email"]); ?></option>
<?php
} while ($myrow = mysql_fetch_array($result));

} else {

}

mysql_close($con);
?>

</select>
</td>
<td>
<input type="submit" name="submit" value="DELETE">
</td> 
</tr>
</table>
</fieldset>
</body>
</html>
