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
.style27 {font-size: 18px; color: #999933; }
.style28 {color: #0000FF}
-->
</style>
</head>

<body>
<table width="1861" height="107" border="1">
  <tr>
    <td bgcolor="#0000FF" class="style1"><div align="center" class="style28">
      <div align="center"><img src="images/Drapeau-Tunisie_240-gif.gif" width="80" height="80" />.................................................................................................................................................................................................................................................................................................................................................................<img src="images/Coat_of_arms_of_Tunisia.svg.png" width="70" height="70" /></div>
      <div align="center">...........................................................................................................................................................<img src="images/jdida.jpg" width="118" height="191" />..................................................................................................................................................................</div>
    </div></td>
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
  <p align="center" class="style18 style24">مــــتابـــــــعة مطالــــــــــب النور الكهربائي <span class="style19">.</span></p>
  <p>&nbsp;</p>
  <form id="b1" name="b1" method="post" action="">
    <label></label>
    <div align="center">
      <label></label>
      <table width="498" height="336" border="1" bgcolor="#999900">
        <tr>
          <td width="488"><div align="center">
              <p>
                <span class="style22">..........................</span>
                <input type="text" name="t1" required="required" />
                <span class="style20">رقم البطاقة التعريف الوطنية</span><br />
                <br />
                <span class="style23">..................</span>
                <input type="date" name="t2" required="required" />
                <span class="style20"><strong> تاريخ الإيداع</strong></span><br />
                <br />
                <span class="style22">..</span>
                <input type="text" name="t3" required="required" />
                <span class="style20"><strong>الإسم</strong>.</span><span class="style22">....</span></p>
              <p><br />
                <span class="style22">................</span>
                <input type="text" name="t4" required="required" />
                <span class="style20">اللقب</span><span class="style22">.................</span></p>
              <p><br />
                <strong><span class="style23">.</span></strong><span class="style23">......
                <input type="text" name="t5" required="required" /> 
                .</span><span class="style27">.</span><span class="style20">العنوان</span><span class="style22">.</span><span class="style22">..</span></p>
          </div>
          <p align="center">
            <label><span class="style22">.......</span>
            <textarea name="t6"></textarea>
            </label>
            <strong class="style20">رأي اللجنة            </strong></p>
          <p>&nbsp;</p></td>
        </tr>
      </table>
      <p>
        <label>
        <input name="b1" type="submit" class="style2" value="تسجيل" />
        </label>
      </p>
    </div>
  </form>
  <p align="center">&nbsp;</p>
  <div align="center"></div>
  <p align="center" class="style18 style24">&nbsp;</p>
  
  <?php
if(isset($_POST["b1"]))
{
include("connection.php");
  $inscription=$_POST["t1"];
  $date=$_POST["t2"];
  $source=$_POST["t3"];
  $sujet=$_POST["t4"];
  $dossier=$_POST["t5"];
  $renuion=$_POST["t6"];
	$sql=mysql_query("insert into permis1(inscription, date, source, sujet, dossier, renuion) values('$inscription','$date','$source', '$sujet', '$dossier','$renuion')");
	if($sql)
	{
	?>
	<script language="javascript">
	alert("تمت الإضافة بنجاح");
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
