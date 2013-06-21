<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile RRI</title>

<style type="text/css">a {text-decoration: none}</style>

</head>

<body>
<?
	$width = "<script>document.write(screen.width); </script>"; 
	$kota = $_GET['kota'];
?>
<table width="512"  border="2" align="center" bordercolor="#EC9E03" bordercolordark="#EC9E03">
  <tr>
    <td width="512" align="center" bgcolor="#EC9E03"><br /><img src="image/rri64.jpg" width="64" height="48" />      <h3>pasar</h3></td>
  </tr>
  <tr>
    <td><a href="menu.php"><img src="image/home-65.png" width="32" height="32" /></a></td>
  </tr>
   <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="7%"><a href="news.php"><img src="image/prev4.png" width="15" height="23" /></a></td>
        <td width="86%"><table width="100%" border="0">
          <tr>
            <td width="49%" align="center"><a href="tradional_det.php?kota=<? echo $kota; ?>"><img src="image/tradisional.png" width="64" height="64" /><br />
              tradisional</a></td>
            <td width="51%" align="center"><a href="moderen_det.php?kota=<? echo $kota; ?>"><img src="image/shopping-cart-icon-with-psd-and-png-format.png" width="64" height="64" /><br />
              moderen</a></td>
          </tr>
          
          <tr>
            <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr>
            <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr>
            <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr>
            <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr>
            <td colspan="2" align="center">&nbsp;</td>
            </tr>
        </table></td>
        <td width="7%" align="right"><a href="game.php"><img src="image/next4.png" width="15" height="23" /></a></td>
      </tr>
    </table></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
 
</table>
</body>
</html>