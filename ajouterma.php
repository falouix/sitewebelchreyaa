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
	font-size: 24px;
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
.style26 {font-size: 18px}
.style27 {font-size: 18px; color: #999933; }
.style28 {color: #0000FF}
.style29 {color: #000000}
.style32 {color: #999933; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="1861" height="107" border="1">
  <tr>
    <td bgcolor="#0000FF" class="style1"><div align="center" class="style28"><img src="images/téléchargement (1).jpeg" width="225" height="225" /></div></td>
  </tr>
</table>
<table width="1861" height="118" border="1">
  <tr>
    <td height="108" bgcolor="#0099FF"><div align="center" class="style2">
      <p class="style4">بـــــــــــلدية الـــــــــشرايع </p>
      <p><span class="style3">مشرق-الشمس</span></p>
      </div></td>
  </tr>
</table>
<div align="right">
  <p>&nbsp;</p>
  <p align="center" class="style18 style24">متابــــــــــــــــــــــعة رخــــــــــــــــــــص البنــــــــــــــــــاء <span class="style19">.</span></p>
  <p>&nbsp;</p>
 <form id="form1" name="form1" method="post" action="" onsubmit="return verify()">
  <table width="75%" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td width="50%">ncin</td>
      <td width="50%"><input type="text" name="t1" id="t1" required /></td>
    </tr>
    <tr>
      <td>Nom</td>
      <td><input type="text" name="t2" id="t2" required /></td>
    </tr>
    <tr>
      <td>Prénom</td>
      <td><input type="text" name="t3" id="t3" required /></td>
    </tr>
    <tr>
      <td>Téléphone</td>
      <td><input type="text" name="t4" id="t4" required /></td>
    </tr>
    <tr>
      <td>Adresse</td>
      <td><input type="text" name="t5" id="t5" required /></td>
    </tr>
    <tr>
      <td>Login</td>
      <td><input type="text" name="t6" id="t6" required /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="b1" id="b1" value="Ajouter" /></td>
    </tr>
  </table>
</form>
<p>
<?php
if(isset($_POST["b1"]))
{
	include("connection.php");
	$ncin=$_POST["t1"];
	$nom=$_POST["t2"];
	$prenom=$_POST["t3"];
	$tel=$_POST["t4"];
	$adresse=$_POST["t5"];
	$login=$_POST["t6"];
	$sql=mysql_query("insert into ma(ncin, nom, prenom, tel,adresse, login, pass) values('$ncin','$nom','$prenom','$tel','$adresse','$login', '$pass')");
	if($sql)
	{
		echo"ajout effectuée";
	}
	else
	{
		echo "echec d'ajout";
	}
}
?>
</p>
<p>&nbsp;</p>	
</fieldset><p align="center">&nbsp;</p>
</body>
</html>