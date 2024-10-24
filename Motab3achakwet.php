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
.style19 {
	font-size: 18px;
	font-weight: bold;
}
.style20 {font-size: 18px}
.style22 {font-size: 36px; font-weight: bold; }
.style23 {color: #0000FF}
.style24 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>

<body>
<table width="1861" height="107" border="1">
  <tr bgcolor="#0000FF">
    <td class="style1"><div align="center" class="style23">
      <div align="center"><img src="images/Drapeau-Tunisie_240-gif.gif" width="80" height="80" />.................................................................................................................................................................................................................................................................................................................................................................<img src="images/Coat_of_arms_of_Tunisia.svg.png" width="70" height="70" /></div>
      <div align="center">...........................................................................................................................................................<img src="images/jdida.jpg" width="118" height="191" />..................................................................................................................................................................</div>
    </div></td>
  </tr>
</table>
<table width="1861" height="118" border="1">
  <tr>
    <td height="108" bgcolor="#0099FF"><div align="center" class="style2">
      <p class="style4"><span class="style24">بلدية الشرايع-مشرق الشمس </span></p>
      </div></td>
  </tr>
</table>
<div align="right">
  <p align="center" class="style18 style2">&nbsp;</p>
  <p align="center" class="style22">الـــــــشكاوى و الــــــــمقترحــــــات </p>
  </fieldset>
  <div align="center">
    <table width="1146" height="139" border="1" align="center">
      <tr bgcolor="#999900">
        <th width="231" scope="row"><div align="center" class="style20">البريد الإلكتروني </div></th>
        <td width="158"><div align="center"><span class="style19">رقم الهاتف </span></div></td>
        <td width="118"><div align="center"><span class="style19">التفاصيل</span></div></td>
        <td width="85"><div align="center"><span class="style20">الموقع</span></div></td>
        <td width="91"><span class="style20"><strong>العنوان</strong></span></td>
        <td width="207"><div align="center" class="style20">موضوع الطلب </div></td>
        <td width="153"><div align="center" class="style20"><strong>الفضاء</strong></div></td>
      </tr>
	   <?php
  include("connection.php");
  $sql=mysql_query("select* from chakwa");
  while($res=mysql_fetch_array($sql))
  {
      $alo=$res["alo"];
	  $type=$res["type"];
	  $poids=$res["poids"];
	  $impot=$res["impot"];
	  $tva=$res["tva"];
	  $delai=$res["delai"];
	  $hi=$res["hi"];
	  ?>
      <tr>
        <th scope="row"><div align="center"><?php echo"$hi"; ?></div></th>
        <td> <div align="center"><?php echo"$delai"; ?></div></td>
        <td> <div align="center"><?php echo"$tva"; ?></div></td>
        <td> <div align="center"><?php echo"$impot"; ?></div></td>
        <td> <div align="center"><?php echo" $poids"; ?></div></td>
        <td> <div align="center"><?php echo"$type"; ?></div></td>
        <td><?php echo"$alo"; ?>
          <div align="center"></div>
        <div align="center"></div></td>
      </tr>
	  
  <?php
  }
  ?>
</table>
</fieldset>
</body>
</html>
    </table>
</div>
</body>
</html>