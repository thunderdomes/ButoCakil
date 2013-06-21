<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
		
	$myquery = "INSERT INTO berita (`username`,`poslong`,`posla`,`waktu`,`pilihan`,`judul`,`berita`,`pospic`) values ('$username','$poslong','$posla','$waktu','$pilihan', '$judul','$berita','$pospic');";
	$result = mysql_query($myquery);
	mysql_close();

?>
<body>
<table width="600" border="0">
  <tr>
    <td width="100%" align="center"><table width="100%" border="0">
      <tr>
        <td>&nbsp;</td>
        <td align="center"><h1> SEND INFO</h1></td>
        <td>&nbsp;</td>
      </tr>
    </table>      </td>
  </tr>
  </table>
  

<table width="600" border="0">
  
  <tr>
    <td><a href="menu.php"><img src="image/home-65.png" width="64" height="64" /></a></td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
      <tr>
       
        <td width="90%"><table width="100%" border="0">
          <tr>
            <td width="10%"><img src="image/Info_0.png" width="64" height="64" /></td>
            <td width="90%"><h2>KIRIM PESAN</h2></td>
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
        <td width="10%"><a href="news.php"><img src="image/next4.png" width="31" height="46" /></a>&nbsp;</td>
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