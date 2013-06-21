<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mobile RRI</title>
</head>
<?
	$poslong=$_POST['poslong'];
	$posla =$_POST['posla'];
	$waktu = $_POST['waktu'];
	$pilihan=$_POST['pilihan'];
	$judul=$_POST['judul'];
	$berita=$_POST['berita'];
	$pospic = $_POST['pospic'];
	$username = $_GET['uname'];
	
	include "db_conn.php";
	
	$myquery = "INSERT INTO tbl_kom_berita (`username`,`poslong`,`posla`,`waktu`,`pilihan`,`judul`,`berita`,`pospic`) values ('$username','$poslong','$posla','$waktu','$pilihan', '$judul','$berita','$pospic');";
	$result = mysql_query($myquery);
	mysql_close();

?>
<body>
<table width="512" border="2" align="center" bordercolor="#EC9E03">
  <tr>
   <td height="114"  align="center" bgcolor="#EC9E03"><br /><img src="image/rri64.jpg" width="64" height="48" />      <h3>kirim berita</h3>
   </td>
   </tr>
   
  
   
  <tr>
    <td><a href="menu.php"><img src="image/home-65.png" width="32" height="32" /></a></td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
      <tr>
       
        <td width="90%"><table width="100%" border="0">
          <tr>
            <td width="10%"><img src="image/Info_0.png" width="32" height="32" /></td>
            <td width="90%"><h3>pesan telah tersimpan</h3></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Pesan sudah terkirim dan segera akan di verifikasi oleh RRI
              </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="10%" align="right"><a href="news.php"><img src="image/next4.png" width="15" height="23" /></a>&nbsp;</td>
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