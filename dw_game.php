<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
$ua = " ".$_SERVER["HTTP_USER_AGENT"];
//echo "$ua <br>";

/* ==== Detect the OS ==== */

// ---- Mobile ----

// Android
$android = strpos($ua, 'Android') ? true : false;

// BlackBerry
$blackberry = strpos($ua, 'BlackBerry') ? true : false;
//echo "<br> blackberry: ".$blackberry;

// iPhone
$iphone = strpos($ua, 'iPhone') ? true : false;

// iPad
$ipad = strpos($ua, 'iPad') ? true : false;

// Palm
$palm = strpos($ua, 'Palm') ? true : false;

// ---- Desktop ----

// Linux
$linux = strpos($ua, 'Linux') ? true : false;

// Macintosh
$mac = strpos($ua, 'Macintosh') ? true : false;

// Windows
$win = strpos($ua, 'Windows Phone') ? true : false;

// ---- Test if using a Handheld Device ----
if ($android) { // Android
echo 'You are using an Android!
';
}
if ($blackberry) { // Blackbery
echo "You are using a Blackbery!";
}
if ($iphone) { // iPhone
echo 'You are using an iPhone!
';
}

if ($ipad) { // iPhone
echo 'You are using an iPad!
';
}
if ($palm) { // Palm
echo 'You are using a Palm!
';
}

if ($win) { // Windows Phone
echo 'You are using Windows Phone
';
}




?>



</body>
</html>