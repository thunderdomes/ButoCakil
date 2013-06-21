<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mobile RRI</title>
<style type="text/css">a {text-decoration: none}</style>
</head>

<body>
<table width="512"  border="2" align="center" bordercolor="#EC9E03" bordercolordark="#EC9E03">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td align="center"><table width="100%" border="0">
      <tr bgcolor="#EC9E03" bordercolor="#EC9E03">
        <td colspan="2"><table width="100%" border="0">
  <tr>
    <td width="20%"><img src="image/rri.jpg" width="80" height="60" /></td>
    <td width="65%" align="center"><h3>komunitas mudik</h3></td>
    <td width="15%" align="right" valign="top"><a href="menu.php"><img src="image/home-65.png" width="32" height="32" /></a></td>
  </tr>
</table></td>
        
      </tr>
     
    </table></td>
  </tr>
  <tr>
    <td>
    <?
		include "db_conn.php";
		
		$myquery = "SELECT id_berita, waktu, pilihan, judul, username FROM tbl_kom_berita WHERE status = 1 order by id_berita desc limit 10";
		
		 $result = mysql_query($myquery);
		  
		 while ($row = mysql_fetch_assoc($result)) {
			 $idberita = $row['id_berita'];
			 $username = $row['username'];
			 $waktu = $row['waktu'];
			 $pilihan = $row['pilihan'];
			 $judul = $row['judul'];
			
			 echo "<tr>
     			<td><a href=\"detkom_beritapic.php?idberita=$idberita\"><h3>$judul</h3> <br />
				$waktu oleh : $username </a></td>
  			 </tr>
			 <tr>
     			<td>&nbsp;</td>
   			</tr>
			 ";
			 
			   
		   }
		   
		   mysql_free_result($result); 
		   mysql_close();
		   
		  
    ?>
    </td>
  </tr>
   
   
   
</table>
</body>
</html>