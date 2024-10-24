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
.style26 {
	font-size: 18px;
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
      <p class="style4 style29"><span class="style30">بلدية الشرايع-مشرق الشمس </span></p>
      </div></td>
  </tr>
</table>
<div align="right">
  <p align="center" class="style18 style2">&nbsp;</p>
  <p align="center" class="style18 style2">متابعة مطالب النور الكهربائي </p>
  <table width="1004" height="126" border="1" align="center">
    <tr bgcolor="#999900">
      <th bgcolor="#999900" scope="row"><div align="center" class="style26">رأي اللجنة </div></th>
      <td><div align="center"><span class="style26">العنوان</span></div></td>
      <td><div align="center" class="style26">اللقب</div></td>
      <td><div align="center" class="style26">الإسم</div></td>
      <td><div align="center" class="style26">تاريخ الإيداع </div></td>
      <td><div align="center" class="style26">رقم بطاقة تعريف وطنية</div></td>
    </tr>
    <tr>
	 <?php
  $ref=$_POST["t1"];
  include("connection.php");
  $sql=mysql_query("select* from permis2 where inscription='$ref' ");
  while($res=mysql_fetch_array($sql))
  {
  $inscription=$res["inscription"];
  $date=$res["date"];
  $source=$res["source"];
  $sujet=$res["sujet"];
  $dossier=$res["dossier"];
  $renuion=$res["renuion"];

  ?> 
      <th scope="row"><div align="center"><?php echo"$renuion"; ?></div></th>
      <td><div align="center"><?php echo"$dossier"; ?></div></td>
      <td><div align="center"><?php echo"$sujet"; ?></div></td>
      <td><div align="center"><?php echo"$source"; ?></div></td>
      <td><div align="center"><?php echo"$date"; ?></div></td>
      <td><div align="center"><?php echo"$inscription"; ?></div></td>
    </tr>
	 <?php
  }
  ?>
  </table>
  <p align="center" class="style18 style2">&nbsp;</p>
  <div align="center">
    <p>&nbsp;</p>
</div>
</body>
</html>
