<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile RRI</title>



</head>

<body>
<?
	$width = "<script>document.write(screen.width); </script>"; 
	$kota = $_GET['kota'];
?>
<table width="512" border="2" align="center" bordercolor="#EC9E03" bordercolordark="#EC9E03">
  <tr>
     <td colspan="3" align="center" bgcolor="#EC9E03"><br /><img src="image/rri64.jpg" width="64" height="48" />      <h3>bengkel</h3></td>
  </tr>
  <tr>
    <td><a href="menu.php"><img src="image/home-65.png" width="32" height="32" /></a></td>
  </tr>
   <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="7%"><a href="news.php"><img src="image/prev4.png" width="15" height="23" /></a></td>
        <td width="86%"><table width="100%" border="1">
          <tr><h3>
            <td align="center">jenis<br /></td>
            <td align="center">nama<br /></td>
            <td align="center">alamat<br /></td>
          </h3></tr>
          <?
		  include "db_conn.php";
		  
		  $myquery = "SELECT  `jenis`, `nama` ,  `alamat` FROM  `tbl_bengkel` WHERE  `kota` LIKE  '%".$kota."%' OR  `alamat` LIKE  '%".$kota."%'";
		  $result = mysql_query($myquery);
		  
		   while ($row = mysql_fetch_assoc($result)) {
			   $jenis = $row['jenis'];
			   $namaapt = $row['name'];
			   $alamat = $row['alamat'];
			  
			   
			   echo "
			    <tr>
					<td>$jenis</td>
            		<td>$namaapt</td>
            		<td>$alamat</td>
          		</tr>
			   ";
			   
		   }
		   
		   mysql_free_result($result); 
		  
		  
          ?>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
         <tr>
            <td colspan="3" align="center">&nbsp;</td>
            </tr>
        </table></td>
        <td width="7%" align="right"><a href="game.php"><img src="image/next4.png" width="15" height="23" /></a></td>
      </tr>
    </table></td>
  </tr>
   
   <tr>
   <form id="form1" name="form1" method="post" action="bengkel_detail_p.php">
    <td align="center" bgcolor="#EC9E03"><h3>cari bengkel 
      
        <select name="kota" id="kota">
        <?
			$myquery = "SELECT DISTINCT kota FROM tbl_bengkel order by kota ";
			
			 $result = mysql_query($myquery);
		  
		   while ($row = mysql_fetch_assoc($result)) {
			   
			   $kotad = $row['kota'];
			   
			   echo "<option value='$kotad'>$kotad</option>";
		   }
		   
		    mysql_free_result($result); 
		?>
          
        </select>
      <input type="submit" name="button" id="button" value="Submit" /></h3></td></form>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
 
</table>
</body>
</html>