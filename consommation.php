<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #CCCCCC;
}
.Style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.Style2 {color: #FFFFFF}
-->
</style></head>

<body>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td bgcolor="#005993"><img src="../../../Users/USER/Desktop/meftehi/img/haut50.jpg" width="1024" height="91" />    </td>
  </tr>
  <tr>
    <td><img src="../../../Users/USER/Desktop/meftehi/img/1.jpg" width="1024" height="330" /></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200" bgcolor="#005993"><p align="center">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="190" height="192">
            <param name="movie" value="../../../Users/USER/Desktop/meftehi/menu.swf" />
            <param name="quality" value="high" /><param name="BGCOLOR" value="#005993" />
            <embed src="../../../Users/USER/Desktop/meftehi/menu.swf" width="190" height="192" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" bgcolor="#005993"></embed>
          </object>
        </p>
          <fieldset>
		  <legend class="Style1">Identification</legend>
          <form id="form1" name="form1" method="post" action="">
            <table width="75%" border="0" align="center" cellpadding="0" cellspacing="5">
              <tr>
                <td><span class="Style2">Login</span></td>
                <td><input name="textfield" type="text" size="10" /></td>
              </tr>
              <tr>
                <td><span class="Style2">Pass</span></td>
                <td><input name="textfield2" type="text" size="10" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="S'identifier" /></td>
              </tr>
            </table>
            </form>
			</fieldset>
          <p align="center"><img src="../../../Users/USER/Desktop/meftehi/img/Untitled - 1.jpg" width="184" height="210" /></p>
          <p>&nbsp;  </p></td>
        <td width="824"><p align="center"><form id="form1" name="form1" method="post" action="">
  <table width="75%" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td width="50%">N&deg; de compteur </td>
      <td width="50%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Consommation</td>
      <td><input name="t2" type="text" id="t2" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Consulter" />
      </div></td>
      </tr>
  </table>
</form>
<?php
if(isset($_POST["Submit"]))
{
include("connection.php");
$consommation1=$_POST["t1"];
$consommation=$_POST["t2"];
$con=$consommation*$consommation1;

?>
Votre Consommation est: <?php echo"$con"; ?><hr>
<?php
}
?>
&nbsp;</p>
          </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#005993"><div align="right"><span class="Style1">CopyRight 2013 Designed par: Meftehi </span></div></td>
  </tr>
</table>
</body>
</html>
