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
.style30 {font-size: 18px; color: #000000; }
.style5 {	font-size: 36px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
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
  <form id="b1" name="b1" method="post" action="">
    <label></label>
    <div align="center">
      <label></label>
      <table width="417" height="336" border="1" bgcolor="#999900">
        <tr>
          <td><div align="center">
              <p>&nbsp;</p>
              <p><span class="style20">
<input type="text" name="t1" required="required" />                
المطلب </span><br />
                <br />
                <span class="style23">...</span>
                <input type="date" name="t2" required="required" />
                <span class="style20">تاريخ الإيداع </span><br />
                <br />
                <input type="text" name="t3" required="required" />
                <span class="style26"><strong>الإسم و اللقب </strong></span>
                <span class="style22">.....</span></p>
              <p><br />
                <span class="style22">................</span>
                <input type="text" name="t4" required="required" />
                رقم البطاقة <span class="style20"></span><span class="style22">...</span></p>
              <p><br />
                <strong><span class="style23">.</span></strong><span class="style23">......
                <input type="text" name="t5" required="required" /> 
                .<span class="style29">العنوان</span></span><span class="style30">نوا</span><span class="style27">ن</span><span class="style22">..</span></p>
          </div>
          <p align="center">
            <label>
            <textarea name="t6"></textarea>
            </label>
            <strong>رأي اللجنة            </strong></p>
          <p>&nbsp;</p></td>
        </tr>
      </table>
      <p>
        <label>
        <input type="submit" name="b1" value="Ajouter" />
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
	$sql=mysql_query("insert into matleb (inscription, date, source, sujet, dossier, renuion) values('$inscription','$date','$source', '$sujet', '$dossier','$renuion')");
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
