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
    <td width="512" align="center" bgcolor="#EC9E03"><br /><img src="image/rri64.jpg" width="64" height="48" />      <h3>spbu pertamina</h3></td>
  </tr>
  <tr>
    <td><a href="menu.php"><img src="image/home-65.png" width="32" height="32" /></a></td>
  </tr>
   <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="10%"><a href="news.php"><img src="image/prev4.png" width="15" height="23" /></a></td>
        <td width="80%"><table width="100%" border="1">
          <tr>
            <td align="center">nama<br /></td>
            <td align="center">alamat<br /></td>
          </tr>
          <?
		  include "db_conn.php";
		  
		  $myquery = "SELECT  `name` ,  `alamat`, `portaladd` FROM  `tbl_spbu` WHERE  `kota` LIKE  '%".$kota."%' OR  `alamat` LIKE  '%".$kota."%'";
		  $result = mysql_query($myquery);
		  
		   while ($row = mysql_fetch_assoc($result)) {
			   
			   $namaapt = $row['name'];
			   $alamat = $row['alamat'];
			   $portal = $row['portaladd'];
			   
			   echo "
			    <tr>
            		<td><a href='$portal'>$namaapt</a></td>
            		<td><a href='$portal'>$alamat</a></td>
          		</tr>
			   ";
			   
		   }
		   
		   mysql_free_result($result); 
		  
		  
          ?>
          <tr>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
         <tr>
            <td colspan="2" align="center">&nbsp;</td>
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
   <form id="form1" name="form1" method="post" action="spbu_detail_p.php">
    <td align="center" bgcolor="#EC9E03"><h3>cari spbu 
      
        <select name="kota" id="kota">
        <?
			$myquery = "SELECT DISTINCT kota FROM tbl_spbu order by kota ";
			
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