<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entry Berita</title>
</head>
<?
	$usrname = $_GET['usr'];
	$id_news = $_GET['id_news'];
	
	include "db_conn.php";
	
	$myquery = "SELECT * FROM tbl_kon_berita WHERE id_berita=$id_news and status=0";
	 $result = mysql_query($myquery);
	 
	 while ($row = mysql_fetch_assoc($result)) {
		$posla = $row['posla'];
		$poslong  = $row['poslong'];
		$waktu = $row['waktu'];
	 	$pilihan = $_row['pilihan'];
		$judul = $row['judul'];
		$berita = $row['berita'];	
		$pospic = $row['pospic'];	
	 }
	 
	 mysql_free_result($result);
	 
	 $myquery = "SELECT nama FROM gps_kota WHERE posla=$posla and poslong=$poslong";
	 $result = mysql_query($myquery);
	 
	  while ($row1 = mysql_fetch_assoc($result)) {
		  $kota = $row1['nama'];
	  }
	  
	  mysql_free_result($result); 
	 mysql_close();
	
?>
<body>
<table width="600" border="0" align="center">
  <tr>
    <td><table width="100%" border="1">
      <tr>
        <td><img src="image/rri64.jpg" width="64" height="48" /></td>
        <td align="center">KONTRIBUTOR ENTRY TOOLS<br />
          APPROVAL PREVIEW</td>
        <td align="right"><img src="image/300px-Crystal_Clear_action_exit.svg.png" width="64" height="64" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    <form action="approve_act.php?uname=<? echo $usrname; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="100%" border="1">
      <tr>
        <td width="30%">username</td>
        <td width="70%"><input name="username" type="hidden" value="<? echo $usrname; ?>" /><? echo $usrname; ?></td>
      </tr>
      <tr>
        <td>waktu</td>
        <td> <input name="waktu" type="hidden" value="<? echo date("D, d M Y H:i:s"); ?>" /><? echo date("D, d M Y H:i:s"); ?></td>
      </tr>
      <tr>
        <td>kota</td>
        <td><? echo $kota; ?></td>
      </tr>
      <tr>
        <td>pilihan</td>
        <td><? echo $pilihan; ?></td>
      </tr>
      <tr>
        <td>judul</td>
        <td><? echo $judul; ?></td>
      </tr>
      <tr>
        <td>berita</td>
        <td><? echo $berita; ?></td>
      </tr>
      <tr>
        <td>picture</td>
        <td><img src="<? echo $pospic;  ?>" width="300" height="300" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">
        <input name="idnews" type="hidden" value="<? echo $id_news; ?>" />
          <input type="submit" name="button" id="button" value="Approve" /><input type="submit" name="button" id="button" value="Reject" />
        </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </form>
    </td>
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