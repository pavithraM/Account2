<?php
require("../library/duration.php");
?>
<html>
<link href="../style/design.css" rel="stylesheet" type="text/css"/>
<body>
<?php
require("../library/connection.php");

$converter=strtolower($_POST[rl]);
$sql="INSERT INTO users (email,name,role,password)
VALUES
('$converter','$_POST[dp]','$_POST[id]','$_POST[todo]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<p>User \"$_POST[dp]\" for \"$_POST[rl]\" email has been added successfully!</p>";

mysql_close($con)
?> 
</body>
</html>