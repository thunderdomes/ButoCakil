<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mobile RRI</title>
<style type="text/css">a {text-decoration: none}</style>
</head>
<?
	$id=$_GET['idberita'];

?>
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
    <td width="65%" align="center"><h3>berita arus mudik</h3></td>
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
		
		$myquery = "SELECT id_berita,posla, poslong, waktu, pilihan, judul, pospic FROM tbl_kon_berita WHERE id_berita=$id";
		
		 $result = mysql_query($myquery);
		  
		 while ($row = mysql_fetch_assoc($result)) {
			 $idberita = $row['id_berita'];
			 $posla = $row['posla']; 
			 $poslong = $row['poslong'];
			 $waktu = $row['waktu'];
			 $pilihan = $row['pilihan'];
			 $judul = $row['judul'];
			 $pospic = $row['pospic'];
			   
		   }
		   
		   mysql_free_result($result); 
		   
		   $mynquery= "SELECT id_berita FROM tbl_kon_berita WHERE id_berita < $idberita and status = 1 order by id_berita desc limit 1";
		   
		    while ($row = mysql_fetch_assoc($result)) {
		   		$nidberita = $row['id_berita'];
			}
			
			$pidberita = 0;
		   $mynquery= "SELECT id_berita FROM tbl_kon_berita WHERE id_berita > $idberita and status = 1 order by id_berita desc limit 1"; 
		   
		   while ($row = mysql_fetch_assoc($result)) {
		   		$pidberita = $row['id_berita'];
			}
			
			 mysql_free_result($result);
    ?>
    <table width="100%" border="0">
      <tr>
        <td width="7%"> <? 
			if ($pidberita = 0) {
				echo "&nbsp;";	
			} else {
				echo "
				<a href=\"det_beritapic.php?idberita=$pidberita;\">
				<img src=\"image/prev4.png\" width=\"15\" height=\"23\" />
				</a>
				";
			}
		?></td>
        <td width="86%" align="center"><h2><? echo $judul; ?></h2></td>
        <td width="7%" align="right"><a href="det_beritapic.php?idberita=?<? echo $nidberita; ?>"><img src="image/next4.png" width="15" height="23" /></a></td>
      </tr>
    </table></td>
  </tr>
   <tr>
    <td align="center"><table width="100%" border="0">
      <tr>
        <td width="71%"><img src="<? echo $pospic; ?>" width="300" height="160" /></td>
        <td width="29%" valign="top"><table width="100%" border="0">
          <tr>
            <td><a href="det_beritatxt.php?idberita=<? echo $idberita; ?>"><h3>BERITA</h3></a></td>
          </tr>
          <tr>
            <td><a href="det_beritaloc.php?idberita=<? echo $idberita; ?>"><h3>LOKASI</h3></a></td>
          </tr>
          <tr>
            <td><a href="det_beritapic.php?idberita=<? echo $idberita; ?>"><h3>GAMBAR</h3></a></td>
          </tr>
          
        </table></td>
      </tr>
    </table></td>
  </tr>
   
   <tr>
     <td><? echo $waktu; ?></td>
   </tr>
   <tr>
     <td><form id="form1" name="form1" method="post" action="submit_komentar.php?idberita=<? echo $idberita; ?>">
<table width="512" border="0">
<tr>
     <td><h3>komentar</h3></td>
   </tr>
   <tr>
     <td>
       <textarea name="komentar" id="komentar" cols="80" rows="3"></textarea>
    </td>
   </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>
  <tr>
    <td><h3><a href="list_komentar.php?id_berita=<? echo $idberita; ?>">lihat komentar lain</a></h3></td>
  </tr>
  <tr>
    <td><table width="200" border="0">
      <tr>
        <td><img src="image/facebook button-logo.png" width="32" height="32" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
 </form>
</td>
   </tr>
</table>
</body>
</html>