<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {font-size: 36px}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style18 {
	font-size: 24px;
	font-weight: bold;
}
.style29 {font-size: 40px}
.style8 {color: #0000FF}
.style30 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>

<body>
<table width="1861" height="107" border="1">
  <tr>
    <td bgcolor="#0000FF" class="style1"><div align="center" class="style8">
      <div align="center"><img src="images/drapppp.jpg" width="60" height="60" />.................................................................................................................................................................................................................................................................................................................................................................<img src="images/drapppp.jpg" width="60" height="60" /></div>
      <div align="center">...........................................................................................................................................................<img src="images/jdida.jpg" width="118" height="191" />..................................................................................................................................................................</div>
    </div></td>
  </tr>
</table>
<table width="1861" height="118" border="1">
  <tr>
    <td height="108" bgcolor="#0099FF"><div align="center" class="style2">
      <p class="style4 style29"><span class="style30">بلدية الشرايع-مشرق الشمس</span> </p>
      </div></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="">
      <table width="50%" border="0" align="center" cellpadding="0" cellspacing="3">
        <tr>
          <td width="25%"><img src="images/images (1).jpg" width="60" height="60" /></td>
          <td width="25%"><span class="Style1"><strong>Login</strong></span></td>
          <td width="50%"><input name="t1" type="text" id="t1" /></td>
        </tr>
        <tr>
          <td><img src="images/password-icon.jpg" width="60" height="60" /></td>
          <td><span class="Style1"><strong>Password</strong></span></td>
          <td><input name="t2" type="password" id="t2" /></td>
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

<div align="right">
  <p align="center" class="style18 style2">&nbsp;</p>
  <p align="center" class="style18 style2">&nbsp;</p>
  <p align="center" class="style18 style2">&nbsp;</p>
  <div align="center">
    <p>&nbsp;</p>
</div>
</body>
</html>
