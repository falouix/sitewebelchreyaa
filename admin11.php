<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {font-size: 36px}
.style3 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style18 {
	font-size: 24px;
	font-weight: bold;
}
.style19 {color: #FFFFFF}
.style20 {
	font-size: 18px;
	font-weight: bold;
}
.style22 {color: #999933}
.style23 {color: #999900}
.style24 {
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
}
.Style11 {	color: #0066FF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="1861" height="107" border="1">
  <tr>
    <td bgcolor="#FF0000" class="style1"><div align="center"><img src="images/téléchargement (1).jpeg" width="225" height="225" /></div></td>
  </tr>
</table>
<table width="1861" height="118" border="1">
  <tr>
    <td height="108" bgcolor="#000000"><div align="center" class="style2">
      <p class="style4">بـــــــــــلدية الـــــــــشرايع </p>
      <p><span class="style3">مشرق-الشمس</span></p>
      </div></td>
  </tr>
</table>
<div align="right">
  <p>&nbsp;</p>
  <table width="50%" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td width="25%"><img src="images/user.png" width="32" height="32" /></td>
      <td width="25%"><span class="Style11">Login</span></td>
      <td width="50%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td><img src="images/password-icon.jpg" width="40" height="32" /></td>
      <td><span class="Style11">Password</span></td>
      <td><input name="t2" type="password" id="t2" /></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
          <input type="submit" name="Submit" value="S'identifier" />
      </div></td>
    </tr>
  </table>
  <p align="center" class="style18 style24">&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
    <label></label>
    <label>
    <div align="center"><span class="style19">...</span></div>
    </label>
    <div align="center">
      <label></label>
    </div>
    <label></label>
  </form>
  <?php
include("connection.php");
if(isset($_POST["t1"]))
{
$Login=$_POST["t1"];
				$res1=mysql_query("SELECT * FROM admin  WHERE login='".$Login."'");
		if($row1=mysql_fetch_array($res1))
		{
			$_SESSION["Login"]="admin";
				header("location: archive.html");
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
  <p>&nbsp; </p>
</div>
</body>
</html>
