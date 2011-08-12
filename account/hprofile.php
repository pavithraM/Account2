<?php
require("../library/duration.php");
?>
<html>
<link href="../style/design.css" rel="stylesheet" type="text/css"/>
<body>
<?php
require("../library/connection.php");

function myAddSlashes($text) {
	if(get_magic_quotes_gpc())
		return $text;
	else
		return addslashes($text);		
}

$opass=myAddSlashes($_POST["ow"]);
$npass=myAddSlashes($_POST["pw"]);

$sql = "SELECT * FROM users WHERE email='$_COOKIE[us]' AND password='$opass'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){

$sql="UPDATE users SET password='$npass' WHERE email='$_COOKIE[us]'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<p>Your password has been modified successfully!</p>";

}else{
echo "<p><font color=\"red\">Your old password is NOT CORRECT!<br/>Password not change.</font></p>";
}
mysql_close($con)
?> 
</body>
</html>