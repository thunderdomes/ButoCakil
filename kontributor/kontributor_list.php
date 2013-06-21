<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0057)http://localhost/tportal/tbl_kon_berita_list.php?a=return -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>tbl_kon_berita</title>
<link rel="stylesheet" type="text/css" href="./lib/style.css">
<meta name="GENERATOR" content="MSHTML 8.00.7600.16385"></head>
<?
	$usrname = $_GET['usr'];
	$orderby = $_GET['orderby'];
?>



<body topmargin="5"><script language="JavaScript" src="./lib/jquery.js"></script>
<script language="JavaScript" src="./lib/ajaxsuggest.js"></script>
<script language="JavaScript" src="./lib/jsfunctions.js"></script>
<script type="text/javascript">
var bSelected=false;
var TEXT_FIRST = "First";
var TEXT_PREVIOUS = "Previous";
var TEXT_NEXT = "Next";
var TEXT_LAST = "Last";
var SUGGEST_TABLE = "tbl_kon_berita_searchsuggest.php";
var MASTER_PREVIEW_TABLE = "tbl_kon_berita_masterpreview.php";
</script><div id="search_suggest"></div><div id="master_details"></div>
<div class="header"></div>
<form method="get" name="frmSearch" action="http://localhost/tportal/tbl_kon_berita_list.php"><input type="Hidden" name="a" value="search"><input type="Hidden" name="value" value="1"><input type="Hidden" name="SearchFor" value=""><input type="Hidden" name="SearchOption" value=""><input type="Hidden" name="SearchField" value=""><img src="./lib/rri64.jpg" alt=""  border="0"></form>
<table width="100%">
  <tbody>
  <tr>
    <td>
      <table class="navigation" border="0" cellspacing="6" cellpadding="0" width="100%" align="center">
        <tbody>
        <tr>
          <td width="40%"></td>
          <td align="middle"><a href="http://localhost/tportal/tbl_kon_berita_search.php">Advanced 
            search</a> </td>
          <td class="separator" height="20" width="1">&nbsp;</td>
          <td align="middle">&nbsp;</td>
          <td class="separator" height="20" width="1">&nbsp;</td>
          <td align="middle">&nbsp;</td></tr></tbody></table></td></tr>
  <tr>
    <td>
      <table class="main_table" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
        <tr>
          <td valign="top" width="250" align="middle">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>
              <tr>
                <td class="menu_line" height="19" width="3"></td>
                <td class="menu_item">&nbsp;</td></tr>
              <tr>
                <td class="menu_line" height="19" width="3"></td>
                <td class="menu_item">&nbsp;</td></tr>
              <tr>
                <td class="menu_line" height="19" width="3"></td>
                <td class="menu_item">&nbsp;</td></tr>
              <tr>
                <td class="menu_line" height="19" width="3"></td>
                <td class="menu_item">&nbsp;</td></tr>
              <tr>
                <td class="menu_line" height="19" width="3"></td>
                <td class="menu_item">&nbsp;</td></tr>
              <tr>
                <td class="menu_line" height="19" width="3"></td>
                <td class="menu_item">&nbsp;</td></tr>
              <tr>
                <td class="menu_line" height="19" width="3"></td>
                <td class="menu_item">&nbsp;</td></tr>
              <tr>
                <td colspan="2">
                  <table class="blackshade" border="0" cellspacing="0" cellpadding="5" width="100%" align="center">
                    <tbody>
                    <tr>
                      <td class="bl" valign="center" align="middle"><b>Search for: 
                        </b>&nbsp;&nbsp;&nbsp;</td></tr>
                    <tr>
                      <td align="left"><select id="ctlSearchField">
<option value="">Any field</option>
<option value="username">username</option>
<option value="poslong">poslong</option>
<option value="posla">posla</option>
<option value="waktu">waktu</option>
<option value="pilihan">pilihan</option>
<option value="judul">judul</option>
<option value="berita">berita</option>
<option value="pospic">pospic</option>
<option value="status">status</option>
<option value="approveby">approveby</option>
</select> </td></tr>
                    <tr>
                      <td align="left"><select id="ctlSearchOption">
<option value="Contains">Contains</option>
<option value="Equals">Equals</option>
<option value="Starts with ...">Starts with ...</option>
<option value="More than ...">More than ...</option>
<option value="Less than ...">Less than ...</option>
<option value="Equal or more than ...">Equal or more than ...</option>
<option value="Equal or less than ...">Equal or less than ...</option>
<option value="Empty">Empty</option>
</select> 
                      </td></tr>
                    <tr>
                      <td align="left"><input id="ctlSearchFor" autocomplete="off" onkeydown="listenEvent(event,this,&#39;ordinary&#39;);" onkeyup="searchSuggest(event,this,&#39;ordinary&#39;);"> </td></tr>
                    <tr>
                      <td align="left"><input class="button" onclick="javascript: RunSearch();" value="Search" type="button">&nbsp;<input class="button" onclick="javascript: document.forms.frmSearch.a.value = &#39;showall&#39;; document.forms.frmSearch.submit();" value="Show all" type="button"> 
                      </td></tr>
                    <tr>
                      <td class="bl" align="middle">Details found 1</td></tr>
                    <tr>
                      <td class="blackshade" align="middle">Page 
                        1of 1</td></tr>
                    <tr>
                      <td class="blackshade" align="middle"><!--Records per page-->Records Per Page: 
                        <select onchange="javascript: document.location=&#39;tbl_kon_berita_list.php?pagesize=&#39;+this.options[this.selectedIndex].value;">
<option value="10">10</option>
<option value="20" selected="">20</option>
<option value="30">30</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="500">500</option>
</select> 
                  </td></tr></tbody></table></td></tr></tbody></table></td><!--table data-->
          <td valign="top" align="middle">
            <table cellspacing="0" cellpadding="0" width="100%">
              <tbody>
              <tr>
                <td class="currentT" align="middle"><b>&nbsp;<? echo $usrname; ?></b> 
              </td></tr>
              <tr>
                <td><!-- Add new record -->
                  <p>&nbsp;&nbsp;&nbsp;&nbsp; <a class="toplinks" href="entry_berita.php?usr=<? echo $usrname; ?>">Add new</a> 
                  &nbsp;&nbsp;</p><!-- delete form -->
                  <form method="post" name="frmAdmin" action="http://localhost/tportal/tbl_kon_berita_list.php"><input type="hidden" id="a" name="a" value="delete">
                  <table style="BORDER-BOTTOM: #c0c0c0 1px solid; BORDER-LEFT: #c0c0c0 1px solid; BORDER-TOP: #c0c0c0 1px solid; BORDER-RIGHT: #c0c0c0 1px solid" class="data" border="0" cellspacing="2" cellpadding="3" width="95%" align="center"><!-- table header -->
                    <tbody>
                    <tr class="blackshade" valign="top"><!---->
                      <td align="middle"><img src="./lib/icon_edit.gif"></td>
                      <td align="middle"><img src="./lib/icon_view.gif"></td>
                      <td align="middle"><input onclick="var i; /*this.checked=!this.checked; */
if ((typeof frmAdmin.elements[&#39;mdelete[]&#39;].length)==&#39;undefined&#39;)
	frmAdmin.elements[&#39;mdelete[]&#39;].checked=this.checked;
else
for (i=0;i&lt;frmAdmin.elements[&#39;mdelete[]&#39;].length;++i) 
	frmAdmin.elements[&#39;mdelete[]&#39;][i].checked=this.checked;" type="checkbox"> </td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=ausername">username</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=aposlong">poslong</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=aposla">posla</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=awaktu">waktu</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=apilihan">pilihan</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=ajudul">judul</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=aberita">berita</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=apospic">picture</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=astatus">status</a> 
                            </td>
                            <td></td></tr></tbody></table></td>
                      <td>
                        <table>
                          <tbody>
                          <tr>
                            <td class="blackshade"><a class="columnheaders" href="kontributor_list.php?usr=<? echo $username; ?>&orderby=aapproveby">approveby</a> 
                            </td>
                            <td></td></tr></tbody></table></td><!----></tr><!-- table data --><!---->
<?                            
   include "db_conn.php";
   
   $myquery = "SELECT poslong, posla, waktu, pilihan, judul, berita, pospic, status, approveby FROM tbl_kon_berita WHERE username='$usrname' ORDER BY $orderby";
   
   $result = mysql_query($myquery);
			
	if (!$result) {
    			$message  = 'Invalid query: ' . mysql_error() . "\n";
    			$message .= 'Whole query: ' . $query;
    			die($message);
	}
				
	while ($row = mysql_fetch_assoc($result)) {
		
		$poslong = $row['poslong'];
		$posla = $row['posla'];
		$waktu = $row['waktu'];
		$pilihan = $row['pilihan'];
		$judul = $row['judul'];
		$berita = $row['berita'];
		$pospic = $row['pospic'];
		$status = $row['status'];
		$approveby = $row['approveby'];
		
		echo "
		
		<tr onmouseover=\"this.className = &#39;rowselected&#39;;\" onmouseout=\"this.className = &#39;shade&#39;;\" valign=\"top\" class=\"shade\">
                      <td align=\"middle\"><a class=\"tablelinks\" href=\"http://localhost/tportal/tbl_kon_berita_edit.php?editid1=".date("Y-m-d H:i:s")."\">Edit</a> 
                        &nbsp; </td>
                      <td align=\"middle\"><a class=\"tablelinks\" href=\"http://localhost/tportal/tbl_kon_berita_view.php?editid1=".date("Y-m-d H:i:s")."\">View</a> 
                        &nbsp;</td>
                      <td align=\"middle\"><input value=\"1\" type=\"checkbox\" name=\"mdelete[]\"> <input type=\"hidden\" name=\"mdelete1[]\" value=\"".date("Y-m-d H:i:s")."\">&nbsp;</td>
                      <td>$usrname </td>
                      <td>$poslong </td>
                      <td>$posla </td>
                      <td>$waktu </td>
                      <td>$pilihan </td>
                      <td>$judul </td>
                      <td>$berita </td>
                      <td><img border=\"0\" alt="" src=\"$pospic\" width="64" height="64"> </td>
                      <td>$status </td>
                      <td>$approveby </td><!----></tr>
		
		";
				
			}
   
                            
  ?>                          
                    <tr onmouseover="this.className = &#39;rowselected&#39;;" onmouseout="this.className = &#39;shade&#39;;" valign="top" class="shade">
                      <td align="middle"><a class="tablelinks" href="http://localhost/tportal/tbl_kon_berita_edit.php?editid1=2013-06-13+00%3A00%3A00">Edit</a> 
                        &nbsp; </td>
                      <td align="middle"><a class="tablelinks" href="http://localhost/tportal/tbl_kon_berita_view.php?editid1=2013-06-13+00%3A00%3A00">View</a> 
                        &nbsp;</td>
                      <td align="middle"><input value="1" type="checkbox" name="mdelete[]"> <input type="hidden" name="mdelete1[]" value="2013-06-13 00:00:00">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td> </td><!----></tr></tbody></table>                  <p align="center"><b></b></p></form></td></tr></tbody></table></td></tr></tbody></table>
      <table class="pagina" width="100%" align="center" height="26">
        <tbody>
        <tr>
          <td align="middle"><script language="JavaScript">WritePagination(1,1);
		function GotoPage(nPageNumber)
		{
			window.location='tbl_kon_berita_list.php?goto='+nPageNumber;
		}
</script></td></tr></tbody></table></td></tr></tbody></table> 
<div class="footer"></div>
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
</div></div><ul class="DefaultTab_Search_Results_search_engines_menu ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="width: 200px; position: absolute; z-index: 999999; display: none;"><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_list.php?a=return#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/search_here.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Search Here</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_list.php?a=return#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/facebook.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Facebook</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_list.php?a=return#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/amazon.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Amazon</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_list.php?a=return#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/wikipedia.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Wikipedia</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_list.php?a=return#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/twitter.ico);"></em><font style="font: 12px Arial !important; color:black !important;">Twitter</font></a></li><li class="ui-menu-item" role="menuitem" style="vertical-align: middle;"><a href="http://localhost/tportal/tbl_kon_berita_list.php?a=return#" class="ui-corner-all" tabindex="-1" style="font-size: 1px; text-align: left;"><em style="float: left; width: 16px; height: 16px; margin-right: 5px; background-image: url(http://assets.defaulttab.com/ebay.ico);"></em><font style="font: 12px Arial !important; color:black !important;">eBay</font></a></li></ul><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1000000; top: 0px; left: 0px; display: none;"></ul></body></html>