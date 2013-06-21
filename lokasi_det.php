<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
	$posla = $_GET['posla'];
	$poslong = $_GET['poslong'];
	$zoom = $_GET['zoom'];
	
	$zoomin = $zoom + 1;
	if ($zoom > 2) {
		$zoomout = $zoom - 1;
	} else {
		$zoomout = $zoom;
	}
	
	$map = "http://maps.google.com/maps/api/staticmap?sensor=false&center=".$posla.",".$poslong."&zoom=".$zoom."&size=600x600&maptype=roadmap&markers=color:blue|label:S|".$posla.','.$poslong;
	
?>
<body>
<table width="100%" border="0">
  <tr>
    <td> <h1 align="center">LOKASI SAYA</h1></td>
  </tr>
  <tr>
    <td><a href="menu.php"><img src="image/home-65.png" width="64" height="64" /></a></td>
  </tr>
  <tr>
    <td align="center"><img src="<? echo $map; ?>" width="640" height="640" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><a href="lokasi_det.php?posla=<? echo $posla; ?>&poslong=<? echo $poslong; ?>&zoom=<? echo $zoomin; ?>"><img src="image/zoom-in-icon.png" width="32" height="32" /></a>
    
    <a href="lokasi_det.php?posla=<? echo $posla; ?>&poslong=<? echo $poslong; ?>&zoom=<? echo $zoomout; ?>"><img src="image/zoom-out.png" width="32" height="32" /></a></td>
  </tr>
</table>
</body>
</html>