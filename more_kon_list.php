<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entry Berita</title>
</head>
<?
	$usrname = $_GET['usr'];
	$page = $_GET['page'];
	$paging = $_GET['paging'];
	
	$spage = $page * $paging;
	$npage = $page + 1;
	
	if ($page > 1) {
		$ppage = $page - 1;
	} else {
		$ppage = 0;
	}
	
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
    <td>
    <ul>
  <?
  include "db_conn.php";
  
  $myquery = "SELECT id_berita, judul FROM tbl_kon_berita WHERE status = 0 order by id limit $spage,$paging";
  
  $result = mysql_query($myquery);
			
			if (!$result) {
    			$message  = 'Invalid query: ' . mysql_error() . "\n";
    			$message .= 'Whole query: ' . $query;
    			die($message);
				}
				
			while ($row = mysql_fetch_assoc($result)) {
				
				$id_berita = $row['id_berita'];
				$judul = $row['judul'];
				
				echo "<li> <a href='approval_prev.php?usr=$usrname&id_news=$id_berita'>$judul</a></li>";
				
			}

			mysql_free_result($result);
  			mysql_close();
  
  ?>
  </ul>
 	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td><a href="more_kon_list.php?usr=<? echo $usrname; ?>&page=<? echo $ppage; ?>&paging=<? echo $paging; ?>"><img src="image/prev4.png" width="31" height="46" /></a></td>
        <td align="right"><a href="more_kon_list.php?usr=<? echo $usrname; ?>&page=<? echo $npage; ?>&paging=<? echo $paging; ?>"><img src="image/next4.png" width="31" height="46" /></a></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>