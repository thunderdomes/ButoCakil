<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0047)http://localhost/tportal/tbl_kon_berita_add.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>tbl_kon_berita</title>
<link rel="stylesheet" type="text/css" href="./lib/style.css"><script language="JavaScript" src="./lib/validate.js"></script>
<script language="JavaScript">
var TEXT_FIELDS_REQUIRED='The Following fields are Required';
var TEXT_FIELDS_ZIPCODES='The Following fields must be valid Zipcodes';
var TEXT_FIELDS_EMAILS='The Following fields must be valid Emails';
var TEXT_FIELDS_NUMBERS='The Following fields must be Numbers';
var TEXT_FIELDS_CURRENCY='The Following fields must be currency';
var TEXT_FIELDS_PHONE='The Following fields must be Phone Numbers';
var TEXT_FIELDS_PASSWORD1='The Following fields must be valid Passwords';
var TEXT_FIELDS_PASSWORD2='should be at least 4 characters long';
var TEXT_FIELDS_PASSWORD3='Cannot be \'password\'';
var TEXT_FIELDS_STATE='The Following fields must be State Names';
var TEXT_FIELDS_SSN='The Following fields must be Social Security Numbers';
var TEXT_FIELDS_DATE='The Following fields must be valid dates';
var TEXT_FIELDS_TIME='The Following fields must be valid time in 24-hours format';
var TEXT_FIELDS_CC='The Following fields must be valid Credit Card Numbers';
var TEXT_FIELDS_SSN='The Following fields must be Social Security Numbers';
</script>
<script language="JavaScript" src="./lib/jquery.js"></script>
<script language="JavaScript" src="./lib/ajaxsuggest.js"></script>
<script language="JavaScript" src="./lib/jsfunctions.js"></script>
<script language="JavaScript">
var locale_dateformat = 1;
var locale_datedelimiter = "/";
var bLoading=false;
var TEXT_PLEASE_SELECT='Please select';
var AUTOCOMPLETE_TABLE='tbl_kon_berita_autocomplete.php';
var SUGGEST_TABLE='tbl_kon_berita_searchsuggest.php';
var SUGGEST_LOOKUP_TABLE='tbl_kon_berita_lookupsuggest.php';
</script>
</head>
<?
	
	$username = $_GET['uname'];
	$idberita = $_GET['idberita'];
	$appv = $_POST['submit1'];
	
	include "db_conn.php";
	
	if ($appv = 'Approve') {
		$status = 1;
	} else {
		$status = 2;
	}
		
	$myquery = "UPDATE tbl_kom_berita SET status=".$status.", approveby=".$username."  WHERE id_berita=".$idberita;
	$result = mysql_query($myquery);
	mysql_close();

?>

<body onload="define(&#39;value_waktu&#39;,&#39;IsRequired&#39;,&#39;waktu&#39;);define(&#39;value_status&#39;,&#39;IsNumericIsRequired&#39;,&#39;status&#39;);"><div id="search_suggest" style="visibility: hidden;"></div>
<script language="JavaScript" src="./lib/calendar.js"></script>

<meta name="GENERATOR" content="MSHTML 8.00.7600.16385">


<h1><img border="0" alt="" src="./lib/rri64.jpg">komunitas<br>
  <? echo $appv; ?> 
berita</h1> &nbsp;&nbsp;&nbsp;<a href="komunitas_listapv.php?usr=<? echo $username; ?>">Back to list</a><br><br>

<script type="text/javascript">
$(document).ready(function(){ 

function loadSelectContent(txt, selectControl, selectValue) 
{
	$('#'+selectControl).get(0).options[0]=new Option(TEXT_PLEASE_SELECT,'');
	var str = txt.split('\n');
	var index = 0;
	for(i=0,j=0; i < str.length - 1; i=i+2, j++) {
		$('#'+selectControl).get(0).options[j+1]=new Option(unescape(str[i+1]),unescape(str[i]));
		if ( unescape(str[i]) == selectValue ) {index = j+1;}
	}
	$('#'+selectControl).get(0).selectedIndex = index;
	if(index==0 && j==1)
		$('#'+selectControl).get(0).selectedIndex = 1;
}
});
</script>
<script>SetToFirstControl();</script>
<div style="position: fixed; margin: 0px; padding: 0px; z-index: 999999; top: 0px; right: 0px; display: none;"><div id="default-tab-outer-wrapper">
	<div class="default-tab-inner-wrapper">
		<a href="javascript:void(0);" class="default-tab-button-up">
			<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
		</a>
		<div class="default-tab-container-wrapper">
			<a href="javascript:void(0);" class="default-tab-button-list">
				<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="background-image: url(http://assets.defaulttab.com/search_here.ico); background-position: 2px 0px; background-repeat: no-repeat no-repeat;">
			</a>
			<input class="DefaultTab_Search_Results_main_search_box_injection_search_text_input DefaultTab_Search_Results_main_search_box_injection_search_text_input_default_text ui-autocomplete-input" type="text" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
		</div>
	</div>
</div></div><ul class="DefaultTab_Search_Results_search_engines_menu ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="width: 200px; position: absolute; z-index: 999999; display: none;"><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_add.php#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/search_here.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Search Here</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_add.php#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/facebook.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Facebook</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_add.php#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/amazon.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Amazon</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_add.php#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/wikipedia.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Wikipedia</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_add.php#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/twitter.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Twitter</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_add.php#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/ebay.ico);"></em><font style="font: 12px Arial !important; color:black !important;">eBay</font></a></li></ul><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1000000; top: 0px; left: 0px; display: none;"></ul></body></html>