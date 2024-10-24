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
.style16 {
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
.style17 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 18px; }
.style18 {
	font-size: 24px;
	font-weight: bold;
}
.style19 {color: #FFFFFF}
.style20 {
	font-size: 18px;
	font-weight: bold;
}
.style21 {font-size: 18px}
.style22 {color: #999933}
.style23 {color: #999900}
.style8 {color: #0000FF}
.style24 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>

<body>
<table width="1861" height="107" border="1">
  <tr>
    <td bgcolor="#0000FF" class="style1"><div align="center" class="style8">
      <div align="center"><img src="images/Drapeau-Tunisie_240-gif.gif" width="60" height="60" />.................................................................................................................................................................................................................................................................................................................................................................<img src="images/Coat_of_arms_of_Tunisia.svg.png" width="60" height="60" /></div>
      <div align="center">...........................................................................................................................................................<img src="images/jdida.jpg" width="118" height="191" />..................................................................................................................................................................</div>
    </div></td>
  </tr>
</table>
<table width="1861" height="118" border="1">
  <tr bgcolor="#0099FF">
    <td height="108"><div align="center" class="style2">
      <p class="style4"><span class="style24">بلدية الشرايع-مشرق الشمس </span></p>
      </div></td>
  </tr>
</table>
<div align="right">
  <p align="center" class="style18">اتصل بنا </p>
  <table width="247" height="174" border="1" align="center">
     <tr bgcolor="#999900">
       <td width="237" height="136">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/téléchargement (1).png" width="129" height="62" align="middle"/></p>
       <p align="center" class="style17"> توقيت العمل </p>
       <p align="center" class="style16"><strong>من الأثنين إلى الخميس</strong></p>
       <p align="center" class="style16"><strong>08:30 : 12:30 --13:30 : 17:30</strong></p>
       <p align="center" class="style16"><strong>الجمعة</strong></p>
       <p align="center" class="style16"><strong>08:00 : 13:00 --14:30 : 17:30 </strong></p></td>
    </tr>
  </table>
   <table width="247" height="174" border="1" align="left" bordercolor="#FFFFFF" bgcolor="#999900">
     <tr>
       <td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/téléchargement (2).png" width="109" height="104" /></p>
       <p align="center" class="style17">عنوان البلدية</p>
       <p align="center" class="style17">64HG+PFQ الشرايع مشرق الشمس, طريق, Sbeïtla </p></td>
     </tr>
   </table>
  <table width="247" height="174" border="1">
    <tr bgcolor="#999900">
      <td height="269"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/téléchargement.png" width="108" height="78" /></p>
      <p align="center" class="style16"><strong>وسائل إتصال</strong></p>
      <p align="center" class="style16"><strong>الهاتف :77.459.054</strong></p>
      <p align="center" class="style16"><strong>البريد الإلكتروني:</strong></p>
      <p align="center"><span class="style17">missaoui.seif2021@gmail.com</span>   </p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center" class="style18">إرسل رسالتك لنا <span class="style19">. </span></p>
  <form id="form1" name="form1" method="post" action="">
    <label></label>
    <label>
    <div align="center"><span class="style19">...</span>
      <table width="334" height="336" border="1" bgcolor="#999900">
      <tr>
        <td><div align="center">
          <input type="text" name="t1" required />
          <span class="style20">الإسم و اللقب</span><br />
          <br />
          <span class="style23">...</span>
          <input type="text" name="t2" required />
          <span class="style20"> البريد الإلكتروني</span> <br />
          <br />
          <input type="text" name="t3" required />
          <span class="style21"><strong>الموضوع<span class="style22">.</span></strong><span class="style22">.</span></span><span class="style22">...</span><br />
          <br />
          <textarea name="t4" required ></textarea>
          <strong><span class="style21">الرسالة</span><span class="style23">..</span></strong><span class="style23">........</span></div></td>
      </tr>
    </table>
    </div>
    </label>
    <div align="center">
      <label>
      <input name="b1" type="submit" class="style18" value="إرسال" />
      </label>
    </div>
    <label></label>
  </form>
  <?php
if(isset($_POST["b1"]))
{
	include("connection.php");
	$nom=$_POST["t1"];
	$email=$_POST["t2"];
	$sujet=$_POST["t3"];
	$lettres=$_POST["t4"];
	$sql=mysql_query("insert into itisal(nom, email, sujet, lettres) values('$nom','$email','$sujet', '$lettres')");
	if($sql)
	{
	?>
	<script language="javascript">
	alert("تمت المراسلة بنجاح");
	</script>
	<?php
	}
	else
	{
		echo "echec d'ajout";
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
