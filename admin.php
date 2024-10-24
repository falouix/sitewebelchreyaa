<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #CCCCCC;
}
.Style1 {
	color: #0066FF;
	font-weight: bold;
}
.style2 {
	color: #FFFFFF;
	font-size: 36px;
}
-->
</style></head>

<body>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="200" bgcolor="#0099FF"><div align="center"><span class="style2">&#1576;&#1604;&#1583;&#1610;&#1577; &#1575;&#1604;&#1588;&#1585;&#1575;&#1610;&#1593;-&#1605;&#1588;&#1585;&#1602; &#1575;&#1604;&#1588;&#1605;&#1587; </span></div></td>
  </tr>
  <tr>
    <td>
	<fieldset>
	<legend>Identification</legend>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<form id="form1" name="form1" method="post" action="">
      <table width="50%" border="0" align="center" cellpadding="0" cellspacing="3">
        <tr>
          <td width="25%"><img src="images/images (1).jpg" width="60" height="60" /></td>
          <td width="25%"><span class="Style1">Login</span></td>
          <td width="50%"><input name="t1" type="text" id="t1" required /></td>
        </tr>
        <tr>
          <td><img src="images/password-icon.jpg" width="60" height="60" /></td>
          <td><span class="Style1">Password</span></td>
          <td><input name="t2" type="password" id="t2" required /></td>
        </tr>
        <tr>
          <td colspan="3"><div align="center">
            <input type="submit" name="Submit" value="S'identifier" />
          </div></td>
        </tr>
      </table>
      </form>
		<?php
include("connection.php");
if(isset($_POST["t1"]))
{
$ref=$_POST["t1"];
		$reff=$_POST["t2"];
				$res1=mysql_query("SELECT * FROM admin  WHERE login='$ref' AND Password='$reff' ");
		if($row1=mysql_fetch_array($res1))
		{
			$_SESSION["UserLogin"]="";
			$_SESSION['UserName']="";
				header("location: admin.html");
		}

		else
		{
			?>
            <script language="javascript">
			alert("veuillez vérifier votre login et/ou password");
			 location.refresh() ; 
			</script>
            <?php
		
		}
}

?>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	</fieldset>
    </td>
  </tr>
  <tr>
    <td bgcolor="#0099FF">&nbsp;</td>
  </tr>
</table>
</body>
</html>
