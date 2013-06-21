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
<table width="512" border="2" align="center" bordercolor="#EC9E03" bordercolordark="#EC9E03">
  <tr>
    <td width="512" align="center" bgcolor="#EC9E03"><br /><img src="image/rri64.jpg" width="64" height="48" />      <h3>rumah sakit</h3></td>
  </tr>
  <tr>
    <td><a href="menu.php"><img src="image/home-65.png" width="32" height="32" /></a></td>
  </tr>
   <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="10%"><a href="news.php"><img src="image/prev4.png" width="15" height="23" /></a></td>
        <td width="80%"><table width="100%" border="1">
          <tr><h3>
            <td align="center">nama<br /></td>
            <td align="center">alamat<br /></td></h3>
          </tr>
          <?
		  include "db_conn.php";
		  
		  $myquery = "SELECT  `nama_rs` ,  `alamat` FROM  `tbl_rsakit` WHERE  `profinsi` LIKE  '%".$kota."%' OR  `alamat` LIKE  '%".$kota."%'";
		  $result = mysql_query($myquery);
		  
		   while ($row = mysql_fetch_assoc($result)) {
			   
			   $namaapt = $row['nama_rs'];
			   $alamat = $row['alamat'];
			   
			   echo "
			    <tr>
            		<td>$namaapt</td>
            		<td>$alamat</td>
          		</tr>
			   ";
			   
		   }
		   
		   mysql_free_result($result); 
		   mysql_close();
		  
          ?>
          <tr>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
         <tr>
            <td colspan="2" align="center"><a href="http://202.70.136.52/map/"><h3>PETA RUMAH SAKIT</h3></a></td>
            </tr>
        </table></td>
        <td width="10%" align="right"><a href="game.php"><img src="image/next4.png" width="15" height="23" /></a></td>
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