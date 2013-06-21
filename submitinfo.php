<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile RRI</title>

</head>

<body>
<?
$width = "<script>document.write(screen.width); </script>"; 

$poslong=$_POST['poslong'];
$posla =$_POST['posla'];
$waktu = $_POST['waktu'];
$pilihan=$_POST['pilihan'];
$judul=$_POST['judul'];
$berita=$_POST['berita'];

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

    if (file_exists("upload/".$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	  $unieqdate = 	date(YmdHisB);  
      move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" .$unieqdate. $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/".$unieqdate. $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }


						
						


?>
<table width="512" border="2" align="center" bordercolor="#EC9E03">
  <tr>
    
        <td colspan="3" align="center" bgcolor="#EC9E03"><br /><img src="image/rri64.jpg" width="64" height="48" />      <h3>kirim berita</h3></td></td>
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
            <td width="90%"><h3>KIRIM PESAN</h3></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><form id="form1" name="form1" method="post" action="saveberita.php">
              <table width="100%" border="0">
                <tr>
                  <td width="10%"><img src="image/maps-128.gif" width="32" height="32" /></td>
                <td width="90%"><img src="<? echo "http://maps.google.com/maps/api/staticmap?sensor=false&center=".$posla.",".$poslong."&zoom=14&size=400x350&markers=color:blue|label:S|".$posla.",".$poslong.";" ?>" width="400" height="350"/>
                <input name="poslong" type="hidden" value="<? echo $poslong; ?>" /><input name="posla" type="hidden" value="<? echo $posla; ?>" />
                
                 </td>
                </tr>
                <tr>
                  <td width="10%"><img src="image/cell-camp-64.png" width="32" height="32" /></td>
                  <td width="82%"><img src="<? echo "upload/".$unieqdate. $_FILES["file"]["name"]; ?>" width="400" height="350"/>
                 <input name="pospic" type="hidden" value="<? echo "upload/".$unieqdate. $_FILES["file"]["name"]; ?>" /> 
                  </td>
                </tr>
                <tr>
                  <td width="10%">waktu</td>
                  <td width="82%"><input name="waktu" size="50" type="text" value="<? echo waktu; ?>" readonly="readonly" /></td>
                </tr>
                <tr>
                  <td width="10%">pilihan</td>
                  <td width="82%"><input type="text" size="50" name="pilihan" id="pilihan" value="<? echo $pilihan; ?>" /></td>
                </tr>
                <tr>
                  <td width="10%">judul</td>
                  <td width="82%"><input type="text" size="50" name="judul" id="judul" value="<? echo $judul; ?>" /></td>
                </tr>
                <tr>
                  <td valign="top">berita</td>
                  <td><textarea name="berita" cols="50" readonly="readonly"><? echo $berita; ?></textarea>                    </label>
                  
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="button" id="button" value="save" /></td>
                </tr>
              </table>
            </form></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="10%"><a href="news.php"><img src="image/next4.png" width="15" height="23" /></a>&nbsp;</td>
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