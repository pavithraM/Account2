<?php
require("../library/duration.php");
?>
<html>
<link href="../style/design.css" rel="stylesheet" type="text/css"/>
<body>
<script>
    function docheck1(){
        if(document.form.ow.value==""){
        alert("Please enter the old password!");
        return false;
        }
        if(document.form.nw.value==""){
        alert("Please enter the new password!");
        return false;
        }
        if(document.form.pw.value==""){
        alert("Please enter the confirm new password!");
        return false;
        }
        if(document.form.nw.value!=document.form.pw.value){
        alert("New password and confirm new password is not the same!");
        return false;
        }
    }
</script>
<fieldset>
<legend>CHANGE PASSWORD</legend>
<p></p>
<form name="form" action="hprofile.php" method="POST" onsubmit="return docheck1()">
<table>
<tr>
<td>Name</td>
<td>: <input type="text" name="nm" style="width:60mm" value="<?php printf("%s",$_COOKIE[un]); ?>" disabled="disabled"> </td>
</tr>
<tr>
<td>Old Password</td>
<td>: <input type="password" name="ow" style="width:60mm" value=""> </td>
</tr>
<tr>
<td>New Password</td>
<td>: <input type="password" name="nw" style="width:60mm" value=""> </td>
</tr>
<tr>
<td>Confirm New Password</td>
<td>: <input type="password" name="pw" style="width:60mm" value=""> </td>
</tr>
<tr><td><br/></td><td></td></tr>
<tr>
<td align="center" colspan="2"><input type="submit" name="submit" value="UPDATE"><td> 
</tr>
</table>
</form>
</fieldset>

</body>
</html>
