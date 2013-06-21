<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile RRI</title>

</head>

<body>
<?
$width = "<script>document.write(screen.width); </script>"; 

$kota = $_POST['kota'];
$waktu = $_POST['waktu'];
$pilihan=$_POST['pilihan'];
$judul=$_POST['judul'];
$berita=$_POST['berita'];
$username = $_GET['uname'];

include "db_conn.php";
	
	$myqr = "SELECT posla, poslong FROM gps_kota WHERE nama='$kota'";
	
	$result = mysql_query($myqr);
	
	while ($row = mysql_fetch_assoc($result)) {
				$posla = $row['posla'];
				$poslong = $row['poslong'];				
			}

	mysql_free_result($result);
	
	mysql_close();

$allowedExts = array("gif", "jpeg", "jpg", "png");

echo $_FILES["file"]["name"];
echo "<br>";
echo $_FILES["file"]["type"];
echo "<br>";
echo $_FILES["file"]["size"];
echo "<br>";

$extension = end(explode(".", $_FILES["file"]["name"]));
echo $extension;
echo "<br>";

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("imgnews/".$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	  $unieqdate = 	date(YmdHisB);  
      move_uploaded_file($_FILES["file"]["tmp_name"], "imgnews/" .$unieqdate. $_FILES["file"]["name"]);
      echo "Stored in: " . "imgnews/".$unieqdate. $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }


						
						


?>
<table width="600" border="0">
  <tr>
    <td width="100%" align="center"><h1>save news</h1></td>
  </tr>
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
            <td><form id="form1" name="form1" method="post" action="savenews.php?uname=<? echo $username; ?>">
              <table width="100%" border="0">
                <tr>
                  <td width="10%"><img src="image/maps-128.gif" width="64" height="64" /></td>
                <td width="82%"><img src="<? echo "http://maps.google.com/maps/api/staticmap?sensor=false&center=".$posla.",".$poslong."&zoom=14&size=512x400&markers=color:blue|label:S|".$posla.",".$poslong.";" ?>" width="512" height="400"/>
                <input name="poslong" type="hidden" value="<? echo $poslong; ?>" /><input name="posla" type="hidden" value="<? echo $posla; ?>" />
                
                 </td>
                </tr>
                <tr>
                  <td width="10%"><img src="image/cell-camp-64.png" width="64" height="63" /></td>
                  <td width="82%"><img src="<? echo "imgnews/".$unieqdate. $_FILES["file"]["name"]; ?>" width="512" height="400"/>
                 <input name="pospic" type="hidden" value="<? echo "upload/".$unieqdate. $_FILES["file"]["name"]; ?>" /> 
                  </td>
                </tr>
                <tr>
                  <td width="10%">WAKTU</td>
                  <td width="82%"><input name="waktu" type="hidden" value="<? echo waktu; ?>" /><label><? echo $waktu; ?></label></td>
                </tr>
                <tr>
                  <td width="10%">PILIHAN</td>
                  <td width="82%"><input type="text" name="pilihan" id="pilihan" value="<? echo $pilihan; ?>" /></td>
                </tr>
                <tr>
                  <td width="10%">JUDUL</td>
                  <td width="82%"><input type="text" name="judul" id="judul" value="<? echo $judul; ?>" /></td>
                </tr>
                <tr>
                  <td valign="top">BERITA</td>
                  <td><input name="berita" type="hidden" value="<? echo $berita; ?>" /> <label><? echo $berita; ?></label>
                  
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="button" id="button" value="Submit" />
                    
                    <input type="submit" name="button2" id="button2" value="preview" /></td>
                </tr>
              </table>
            </form></td>
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