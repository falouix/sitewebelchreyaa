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
.style8 {color: #0000FF}
.style9 {font-size: 36px; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #FFFFFF; }
.style10 {font-size: 36px; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #FF0000; }
.style18 {	font-size: 24px;
	font-weight: bold;
}
.style22 {color: #999933}
.style23 {color: #999900}
.style26 {font-size: 16px}
.style27 {font-family: "Times New Roman", Times, serif}
.style32 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table width="1861" height="107" border="1">
  <tr>
    <td bgcolor="#0000FF" class="style1"><div align="center" class="style8">
      <div align="center"><img src="images/drapppp.jpg" width="60" height="60" />.................................................................................................................................................................................................................................................................................................................................................................<img src="images/Coat_of_arms_of_Tunisia.svg.png" width="60" height="60" /></div>
      <div align="center">...........................................................................................................................................................<img src="images/jdida.jpg" width="118" height="191" />..................................................................................................................................................................</div>
    </div></td>
  </tr>
</table>
<table width="1861" height="120" border="1">
  <tr>
    <td height="114" bgcolor="#0099FF"><div align="center" class="style2">
      <p class="style9">بلدية الشرايع-مشرق الشمس<span class="style3"></span></p>
      </div></td>
  </tr>
</table>
<form name="form1" method="post" action="">
  <fieldset class="loginField">
  <div align="center">
    <legend class="style5"></legend>
    <legend class="style5"></legend>
    <legend class="style5"></legend>
    <legend class="style5">فضـــــاء متابعة مقدار إستخلاصات الإشهار و الرصيف </legend>
    <p class="style10">&nbsp;</p>
    <table width="530" height="217" border="1" bgcolor="#999900">
      <tr>
        <td><div align="center">
            <p class="style5">اللافتة الإشهارية</p>
            <p>&nbsp;</p>
            <p>
              <input name="a" type="radio" value="90000" />
              <span class="style27"><strong>             مضيئة/ G.P13 </strong></span></p>
            <p class="style27"><strong>
              <input name="b" type="radio" value="50000" />
غير مضيئة               /G.P13  </strong></p>
            <p class="style27"><strong>
              <label>
              <input name="c" type="radio" value="30000" />
              </label>
              تجمعات سكنية /مضيئة
            </strong></p>
            <p class="style27"><strong>
              <input name="d" type="radio" value="20000 />
            non</p>
            <p><span class="style25">
              تجمعات سكنية/غير مضيئة </strong></p>
            <p class="style27">&nbsp;</p>
            <p><span class="style23">..........................</span>
              </span>
              <input type="text" name="t1" id="t1" required="required" />
            <span class="style26"><strong>مساحة اللافتة الإشهارية</strong><strong></strong></span><strong> <span class="style22">..</span> </strong></p>
            <p><br />
                <span class="style23">..............</span>
                <input type="text" name="t2" id="t2" required="required" />
                <span class="style26"><strong>مساحة الرصيف </strong><span class="style23">.</span></span><span class="style23">..</span></p>
            <p><br />
            <span class="style22">...</span><br />
                <input name="Submit" type="submit" class="style18" value="إرسال" />
                <span class="style23">......</span><br />
            <strong><span class="style23">.</span></strong><span class="style23">........</span></p>
        </div></td>
      </tr>
    </table>
    <p class="style18">:معلوم الإستخلاص </p>
  </div>
  <div align="center" class="style1">
    <div align="center"><span class="style32">............................................................................
      <?php
if(isset($_POST["Submit"]))
{
$cons1=$_POST["a"];
$cons2=$_POST["b"];
$cons3=$_POST["c"];
$cons4=$_POST["d"];
$consommation1=$_POST["t1"];
$consommation=$_POST["t2"];
$conn=($consommation*150)*360;
$connn=($conn)+($consommation1)*(($cons1)+($cons2)+($cons3)+($cons4));
?>
      <span class="style5">معلوم الإستخلاص</span></span> <span class="style10"><?php echo"$connn"; ?> .د</span></div>
  </div>
  </fieldset>
</form>
<hr>
<?php
}
?>.     

</body>
</html>