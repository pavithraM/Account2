<?php
require("../library/duration.php");
?>
<html>
<link href="../style/design.css" rel="stylesheet" type="text/css"/>
<body>
<?php
require("../library/connection.php");

$sql="DELETE FROM users WHERE email='$_POST[pid]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "<p>Account for email \"$_POST[pid]\" has been deleted successfully!</p>";

mysql_close($con);
?> 
</body>
</html>