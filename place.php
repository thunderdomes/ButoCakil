<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile RRI</title>
<style type="text/css">a {text-decoration: none}</style>
<script src="jquery-1.2.3.pack.js"></script>
    <script>
        jQuery(window).ready(function(){
            jQuery("#btnInit").click(initiate_geolocation);
        });
        function initiate_geolocation() {
            navigator.geolocation.getCurrentPosition(handle_geolocation_query,handle_errors);
        }
        function handle_errors(error)
        {
            switch(error.code)
            {
                case error.PERMISSION_DENIED: alert("user did not share geolocation data");
                break;
                case error.POSITION_UNAVAILABLE: alert("could not detect current position");
                break;
                case error.TIMEOUT: alert("retrieving position timed out");
                break;
                default: alert("unknown error");
                break;
            }
        }
        function handle_geolocation_query(position)
		{
		    var image_url = "http://maps.google.com/maps/api/staticmap?sensor=false&center=" + position.coords.latitude + "," +
		                    position.coords.longitude + "&zoom=14&size=512x400&markers=color:blue|label:S|" +
		                    position.coords.latitude + ',' + position.coords.longitude;
		    jQuery("#map").remove();
		    
			
			jQuery(document.body).append( jQuery(document.createElement("br")));
			
			document.getElementById('poslong').value = position.coords.longitude;
			document.getElementById('posla').value = position.coords.latitude;
			
			var oldLocation = window.location;
			window.location = "place.php?posla=" + position.coords.latitude + "&poslong=" + position.coords.longitude;
			
			
		}
        
        
    </script>



</head>

<body>
<?
$width = "<script>document.write(screen.width); </script>"; 

$posla = $_GET['posla'];
$poslong = $_GET['poslong'];

$posdot = strpos($posla,".");
$posla = substr($posla,0,$posdot+3);

$posdot = strpos($poslong,".");
$poslong = substr($poslong,0,$posdot+3);

if (!empty($posla)) {

$myquery = "SELECT nama FROM `gps_kota` WHERE poslong >= $poslong and  posla <= $posla order by poslong, posla limit 1";



include "db_conn.php";

 $result = mysql_query($myquery);
 
 if (!$result) {
    			$message  = 'Invalid query: ' . mysql_error() . "\n";
    			$message .= 'Whole query: ' . $query;
    			die($message);
				}
 
				 while ($row = mysql_fetch_assoc($result)) {
	 					$kota = $row['nama'];
	 
 				}

	mysql_free_result($result);
  	mysql_close();	

} else {
	$peringatan = "Posisi Anda belum ter-indetifikasi,<br> silahkan Click Update posisi";
}

?>
<table width="512" border="2" align="center" bordercolor="#EC9E03" bordercolordark="#EC9E03">
<tr>
    <td>

<table width="512" border="0" align="center">
  <tr>
     <td colspan="3" align="center" bgcolor="#EC9E03"><br /><img src="image/rri64.jpg" width="64" height="48" />      <h3>informasi tempat penting</h3></td>
  </tr>
  <tr>
    <td><a href="menu.php"><img src="image/home-65.png" width="32" height="32" /></a></td>
  </tr>
   <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="7%" align="left"><a href="news.php"><img src="image/prev4.png" width="15" height="23" /></a></td>
        <td width="86%"><table width="100%" border="0">
          <tr>
            <td width="7%" ><img src="image/maps-128.gif" width="64" height="64" border="1" /></td>
            <td width="90%">
              
              <h2><? echo $peringatan; ?><input name="btnInit" id="btnInit" value="Update Posisi" /></h2>
              <input name="poslong" type="hidden" id="poslong" value = "<? echo $poslong; ?>"/>                    
               <input type="hidden" name="posla" id="posla" value="<? echo $posla; ?>" />
               <br /><input type="hidden" name="kota" id="kota" value="<? echo $kota; ?>" />
               </td>
          </tr>
          
          <tr>
            <td width="10%" ><a href="restarea_detail.php?kota=<? echo $kota; ?>"><img src="image/rest_area_icon.jpg" width="64" height="64" border="1" /></a></td>
            <td width="90%"><h3><a href="restarea_detail.php?kota=<? echo $kota; ?>">rest area</a></h3></td>
          </tr>
          <tr>
            <td><a href="spbu_detail.php?kota=<? echo $kota; ?>"><img src="image/SPBU.png" width="64" height="64" border="1" /></a></td>
            <td><h3><a href="spbu_detail.php?kota=<? echo $kota; ?>">stasiun pengisian bahan bakar umum (spbu)</a></h3></td>
          </tr>
          <tr>
            <td><a href="atm_menu.php?kota=<? echo $kota; ?>"><img src="image/empty_atm.png" width="64" height="64" border="1" /></a></td>
            <td><h3><a href="atm_menu.php?kota=<? echo $kota; ?>">ATM / BANK</a></h3></td>
          </tr>
          <tr>
            <td><a href="resto_detail.php?kota=<? echo $kota; ?>"><img src="image/icon_restoran.png" width="64" height="64" border="1" /></a></td>
            <td><h3><a href="resto_detail.php?kota=<? echo $kota; ?>">restoran</a></h3></td>
          </tr>
          <tr>
            <td><a href="pospolisi_detail.php?kota=<? echo $kota; ?>"><img src="image/polisi.png" width="64" height="64" border="1" /></a></td>
            <td><h3><a href="pospolisi_detail.php?kota=<? echo $kota; ?>">kantor polisi</a></h3></td>
          </tr>
          <tr>
            <td><a href="bangkel_detail.php?kota=<? echo $kota; ?>"><img src="image/bengkel.png" width="64" height="64" border="1" /></a></td>
            <td><h3><a href="bangkel_detail.php?kota=<? echo $kota; ?>">bengkel</a></h3></td>
          </tr>
          <tr>
            <td><a href="rs_menu.php?kota=<? echo $kota; ?>"><img src="image/doctor-icon2.png" width="64" height="64" border="1" /></a></td>
            <td><h3><a href="rs_menu.php?kota=<? echo $kota; ?>">rumah sakit dan apotik</a></h3></td>
          </tr>
          <tr>
            <td><a href="masjid_detail.php?kota=<? echo $kota; ?>"><img src="image/mescidinebevi_256.png" width="64" height="64" border="1" /></a></td>
            <td><a href="masjid_detail.php?kota=<? echo $kota; ?>"><h3>rumah ibadah</h3></a></td>
          </tr>
          <tr>
            <td><a href="hotel_detail.php?kota=<? echo $kota; ?>"><img src="image/hotel-icon.png" width="64" height="62" border="1" /></a></td>
            <td><h3><a href="hotel_detail.php?kota=<? echo $kota; ?>">hotel dan penginapan</a></h3></td>
          </tr>
          <tr>
            <td><a href="pertokoan_detail.php?kota=<? echo $kota; ?>"><img src="image/shop-icon.png" width="64" height="64" border="1" /></a></td>
            <td><h3><a href="pertokoan_detail.php?kota=<? echo $kota; ?>">pasar dan pertokoan</a></h3></td>
          </tr>
          <tr>
            <td><a href="wisata_detail.php?kota=<? echo $kota; ?>"><img src="image/wisata.png" width="64" height="64" border="1" /></a></td>
            <td><a href="wisata_detail.php?kota=<? echo $kota; ?>"><h3>tempat wisata</h3></a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><a href="recomandplace_list.php?kota=<? echo $kota; ?>"><img src="image/s_lokasi.png" width="64" height="64" border="1" /></a></td>
            <td><h3><a href="recomandplace_list.php?kota=<? echo $kota; ?>">tempat menarik yang di rekomendasikan</a></h3></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="7%" align="right"><a href="game.php"><img src="image/next4.png" width="15" height="23" /></a></td>
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
</td>
</tr>
</table>
</body>
</html>