<!DOCTYPE html>
<html>
  <head>
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
		                    position.coords.longitude + "&zoom=14&size=512x400&maptype=roadmap&markers=color:blue|label:S|" +
		                    position.coords.latitude + ',' + position.coords.longitude;
		    jQuery("#map").remove();
		    jQuery(document.body).append(
		        jQuery(document.createElement("img")).attr("src", image_url).attr('id','map')
		    );
			
			var oldLocation = window.location;
			window.location = "lokasi_det.php?posla=" + position.coords.latitude + "&poslong=" + position.coords.longitude + "&zoom=14";
		}
        
        
    </script>
  <style type="text/css">
  #btnInit {
	font-size: 24px;
	font-weight: bold;
	text-align: center;
}
  </style>
  </head>
  <body>
  <h1 align="center">LOKASI SAYA</h1>
  <a href="menu.php"><img src="image/home-65.png" width="64" height="64" /></a>
  <br>
    <div>
      <button id="btnInit"  >Find my location</button>
      
      <p>&nbsp;</p>
  </body>
</html>