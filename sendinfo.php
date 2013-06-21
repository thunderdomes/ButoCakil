<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile RRI</title>
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
			
			
		}
        
        
    </script>

</head>

<body>

<?
$width = "<script>document.write(screen.width); </script>"; 



?>
<table width="512" border="2" align="center" bordercolor="#EC9E03" bordercolordark="#EC9E03">
<tr>
<td>
<table width="512" border="0">
  <tr>
    
        <td colspan="3" align="center" bgcolor="#EC9E03"><br /><img src="image/rri64.jpg" width="64" height="48" />      <h3>kirim berita</h3></td>
     
  </tr>
  </table>
  
<img src="image/maps-128.gif" width="32" height="32" /><button id="btnInit" >Update location</button>

<?php

if( isset($_POST['submit']) ) {   
	include('simpleimage.php'); 
	$image = new SimpleImage(); 
	$image->load($_FILES['file']['tmp_name']); 
	$image->resize(400,350);
	$image->output(); 
} else { 

?>


<form id="form1" name="form1" method="post" action="submitinfo.php" enctype="multipart/form-data">
<table width="512" border="0">
  
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
            <td>
              <table width="100%" border="0">
                <tr>
                  <td width="10%">Position</td>
                  <td width="90%"><input name="poslong" type="text" id="poslong" />
                    <br />
                    <label for="posla"></label>
                    <input type="text" name="posla" id="posla" /></td>
                </tr>
                <tr>
                  <td width="10%"><img src="image/cell-camp-64.png" width="64" height="63" /></td>
                  <td width="90%"><input type="file" name="file" accept="image/*;capture=camera" />
                    <br /></td>
                </tr>
                <tr>
                  <td width="10%">WAKTU</td>
                  <td width="82%"><input name="waktu" type="text"  value="<? echo date("D, d M Y H:i:s"); ?>" readonly="readonly"/></td>
                </tr>
                <tr>
                  <td width="10%">PILIHAN</td>
                  <td width="82%">
                  <select name="pilihan" id="pilihan">
                    <option value=1>traffic report</option>
                    <option value=2>berita ringan</option>
                    <option value=3>berita komunitas</option>
                    <option value=4>hot news</option>
                  </select></td>
                </tr>
                <tr>
                  <td width="10%">JUDUL</td>
                  <td width="82%"><input name="judul" type="text" id="textfield" size="50"  /></td>
                </tr>
                <tr>
                  <td valign="top">BERITA</td>
                  <td><textarea name="berita" id="textarea" cols="48" rows="5"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="button" id="button" value="Submit" /></td>
                </tr>
              </table>
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
</form>
<?
}
?>
</td>
</tr>
</table>
</body>
</html>