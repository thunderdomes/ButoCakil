<?
	$usrname = $_GET['uname'];
	$idnews = $_POST['idnews'];
	$valbutton = $_POST['button'];
	
	if ($valbutton = "Approve") {
		$myqery = "UPDATE tbl_kon_berita SET status=1, approveby='$usrname' WHERE idnews=$idnews";	
	} else {
		$myqery = "UPDATE tbl_kon_berita SET status=1, approveby='$usrname' WHERE idnews=$idnews";	
	}
	
	include "db_conn.php";
	 $result = mysql_query($myquery);
	 mysql_close();
	 
	 header('Location: kontributor_list.php');

?>