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
.style5 {
	font-size: 36px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style6 {
	font-size: 18px;
	font-weight: bold;
}
.style7 {font-size: 18px}
.style8 {color: #0000FF}
.style9 {font-size: 36px; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #FFFFFF; }
-->
</style>
</head>
<body>
<span class="style8"></span>
<table width="1861" height="107" border="1">
  <tr>
    <td bgcolor="#0000FF" class="style1"><div align="center" class="style8">
	  <div align="center"><img src="images/Drapeau-Tunisie_240-gif.gif" width="60" height="60" />.................................................................................................................................................................................................................................................................................................................................................................<img src="images/Coat_of_arms_of_Tunisia.svg.png" width="60" height="60" /></div>
	  <div align="center">...........................................................................................................................................................<img src="images/jdida.jpg" width="118" height="191" />..................................................................................................................................................................</div>
    </div></td>
  </tr>
</table>
<table width="1861" height="120" border="1">
  <tr>
    <td height="114" bgcolor="#0099FF"><div align="center" class="style2">
      <p class="style9">بلدية الشرايع-مشرق الشمس <span class="style3"></span></p>
      </div></td>
  </tr>
</table>
<form name="form1" method="post" action="">
  <fieldset class="loginField">
  <div align="center">
    <legend class="style5"></legend>
    <p><img width="1122" height="200" src="chakwa_clip_image001.png" alt="Ruban vers le haut: فضاء الشكاوى و المقترحات" /></p>
    <p>&nbsp;</p>
  </div>
  <table width="47%" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="39%" bgcolor="#999900"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
      <td width="61%" bgcolor="#999900"><p>
        <select name="t0" class="style5" id="t0">
          <option>شكوى</option>
          <option>مقترح</option>
        </select>
        </p>
        <p>&nbsp;</p>
        <p>
          <select name="t1" class="style5" id="t1">
            <option>النظافة و رفع الفضلات</option>
            <option>الإنارة العمومية</option>
            <option>العناية بالطريق</option>
			 <option>المناطق الخضراء</option>
            <option>مواضيع أخرى</option>
          </select>
        </p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td bgcolor="#999900">&nbsp;</td>
      <td bgcolor="#999900"><input type="text" name="t2" id="t2">
      <span class="style6">العنوان</span></td>
    </tr>
    <tr>
      <td bgcolor="#999900">&nbsp;</td>
      <td bgcolor="#999900"><input type="text" name="t3" id="t3">
      <span class="style6">الموقع</span></td>
    </tr>
    <tr>
      <td bgcolor="#999900">&nbsp;</td>
      <td bgcolor="#999900"><input type="text" name="t4" id="t4">
      <span class="style6">التفاصيل</span></td>
    </tr>
    <tr>
      <td bgcolor="#999900"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
      <td bgcolor="#999900"><p>
        <input type="text" name="t5" id="t5">
        <span class="style7">رقم الهاتف </span></p>
        <p>
          <input type="text" name="t6" id="t6" /> 
      <span class="style6">البريد الإلكتروني        </span></p></td>
    </tr>
    <tr bgcolor="#999900">
      <td colspan="2" align="center"><input type="submit" name="b1" id="b1" value="إرسال" class="style6"></td>
    </tr>
  </table>
  </fieldset>
</form>
<?php
if(isset($_POST["b1"]))
{
include("connection.php");
$alo=$_POST["t0"];
$type=$_POST["t1"];
$poids=$_POST["t2"];
$impot=$_POST["t3"];
$tva=$_POST["t4"];
$delai=$_POST["t5"];
$hi=$_POST["t6"];
$sql=mysql_query("insert into chakwa (alo, type, poids, impot, tva, delai, hi) values ('$alo','$type','$poids', '$impot', '$tva', '$delai','$hi')");
if($sql)
{
	?>
	<script language="javascript">
	alert("تم الإرسال بنجاح");
	</script>
    <?php
}
else
echo"echec d'ajout";
	
}
?>
</body>
</html>