<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entry Berita</title>
</head>
<?
	$usrname = $_GET['usr'];
	
?>
<body>
<table width="600" border="0" align="center">
  <tr>
    <td><table width="100%" border="1">
      <tr>
        <td><img src="image/rri64.jpg" width="64" height="48" /></td>
        <td align="center">KONTRIBUTOR ENTRY TOOLS<br />
          RECOMMENDED PLACES</td>
        <td align="right"><img src="image/300px-Crystal_Clear_action_exit.svg.png" width="64" height="64" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    <form action="prevnews.php?uname=<? echo $usrname; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
        <td><label for="kota"></label>
          <select name="kota" id="kota">
            
          <?
		  	include "db_conn.php";
			
			$myquery="SELECT nama FROM gps_kota order by nama";
			$result = mysql_query($myquery);
			
			if (!$result) {
    			$message  = 'Invalid query: ' . mysql_error() . "\n";
    			$message .= 'Whole query: ' . $query;
    			die($message);
				}
				
			while ($row = mysql_fetch_assoc($result)) {
				$namakota = $row['nama'];
				
				echo "<option value='$namakota'>$namakota</option>";
			}

			mysql_free_result($result);
			
			
			
		  ?>
          </select></td>
      </tr>
      <tr>
        <td>pilihan</td>
        <td><label for="pilihan"></label>
          <select name="pilihan" id="pilihan">
           <?
		  
			
			$myquery="SELECT typeplace FROM tbl_typeplace order by typeplace";
			$result = mysql_query($myquery);
			
			if (!$result) {
    			$message  = 'Invalid query: ' . mysql_error() . "\n";
    			$message .= 'Whole query: ' . $query;
    			die($message);
				}
				
			while ($row = mysql_fetch_assoc($result)) {
				$typenews = $row['typenews'];
				
				echo "<option value='$typenews'>$typenews</option>";
			}

			mysql_free_result($result);
			
			mysql_close();
			
		  ?>
          </select></td>
      </tr>
      <tr>
        <td>judul</td>
        <td><label for="judul"></label>
          <input name="judul" type="text" id="judul" size="47"  /></td>
      </tr>
      <tr>
        <td>keterangan tempat</td>
        <td><label for="txtberita"></label>
          <textarea name="txtberita" id="txtberita" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>picture</td>
        <td><label for="fl_picture"></label>
          <input type="file" name="file" id="file" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="button" id="button" value="Submit" />
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