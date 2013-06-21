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
        <td align="center">APPROVAL PAGE</td>
        <td align="right"><img src="image/300px-Crystal_Clear_action_exit.svg.png" width="64" height="64" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td><ul>
    	<li> <a href="kontributor_list.php?usr=<? echo $usrname; ?>">kontributor </a></li>
        <li><a href="komunitas_list.php?usr=<? echo $usrname; ?>">komunitas</a></li>
        <li> <a href="lokasi_list.php?usr=<? echo $usrname; ?>">lokasi</a></li>
        </ul>
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>