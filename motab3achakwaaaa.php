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
.style24 {
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
}
.style27 {
	font-size: 18px;
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
  <p align="center" class="style18 style24">مـــــــتابــــــــعة الإتصــــــــــــــــــال</p>
  <p align="center" class="style18 style24">&nbsp;</p>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="3">
  <tr bgcolor="#999900">
   <td width="30%" height="47"><div align="center" class="style27">الرسالة</div></td>
    <td width="18%"><div align="center"><span class="style27">الموضوع</span></div></td>
    <td width="23%"><div align="center" class="style27">البريد الإلكتروني </div></td>
    <td width="29%"><p align="center">ا<span class="style27">لإسم و اللقب </span></p>    </td>
      </tr>
  <?php
  include("connection.php");
  $sql=mysql_query("select* from itisal");
  while($res=mysql_fetch_array($sql))
  {
      $nom=$res["nom"];
	  $email=$res["email"];
	  $sujet=$res["sujet"];
	  $lettres=$res["lettres"];
	  ?>
	  
  <tr>
   <td height="46"><div align="center"><?php echo"$lettres"; ?>
   </div></td>
    <td><div align="center"><?php echo"$sujet"; ?></div></td>
    <td><div align="center"><?php echo"$email"; ?></div></td>
    <td><div align="center"><?php echo"$nom"; ?></div></td>
  <?php
  }
  ?>
</table>
</fieldset>
</body>
</html>