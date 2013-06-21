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
	$usrname = $_GET['usr'];
	
?>

<body onload="define(&#39;value_waktu&#39;,&#39;IsRequired&#39;,&#39;waktu&#39;);define(&#39;value_status&#39;,&#39;IsNumericIsRequired&#39;,&#39;status&#39;);"><div id="search_suggest" style="visibility: hidden;"></div>
<script language="JavaScript" src="./lib/calendar.js"></script>

<meta name="GENERATOR" content="MSHTML 8.00.7600.16385">

<form enctype="multipart/form-data" method="post" name="editform" action="prevnews.php?uname=<? echo $usrname; ?>" > 
<h1><img border="0" alt="" src="./lib/rri64.jpg">Kontributor<br>Masukkan 
berita, Add new record</h1> &nbsp;&nbsp;&nbsp;<a href="http://localhost/tportal/tbl_kon_berita_list.php?a=return">Back to list</a><br><br>
<table style="BORDER-BOTTOM: silver 1px solid; BORDER-LEFT: silver 1px solid; BORDER-TOP: silver 1px solid; BORDER-RIGHT: silver 1px solid" class="main_table" cellpadding="2">
  <tbody>
  <tr>
    <td class="shade" width="150">username</td>
    <td width="250"><input type="text" name="username" maxlength="60" value="<? echo $usrname; ?>" readonly> </td></tr>
  <tr>
    <td class="shade" width="150">kota</td>
    <td width="250"><select name="kota" id="kota" class="selects">
      <?
		  	include "db_conn.php";
			
			$myquery="SELECT nama FROM gps_kota order by nama";
			$result = mysql_query($myquery);
			
			if (!$result) {
    			$message  = 'Invalid query: ' . mysql_error() . "\n";
    			$message .= 'Whole query: ' . $query;
    			die($message);
				}
				
			while ($row = mysql_fetch_assoc($result)) {
				$namakota = $row['nama'];
				
				echo "<option value='$namakota'>$namakota</option>";
			}

			mysql_free_result($result);
			
			
			
		  ?>
    </select></td></tr>
  
  <tr>
    <td class="shade" width="150">waktu</td>
    <td width="250"><select class="selects" name="dayvalue_waktu" onchange="javascript: SetDatevalue_waktu(); return true;"><option value=""> </option><option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>&nbsp;<select class="selectm" name="monthvalue_waktu" onchange="javascript: SetDatevalue_waktu(); return true;"><option value=""></option><option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>&nbsp;<select class="selects" name="yearvalue_waktu" onchange="javascript: SetDatevalue_waktu(); return true;"><option value=""> </option><option value="1913">1913</option>
<option value="1914">1914</option>
<option value="1915">1915</option>
<option value="1916">1916</option>
<option value="1917">1917</option>
<option value="1918">1918</option>
<option value="1919">1919</option>
<option value="1920">1920</option>
<option value="1921">1921</option>
<option value="1922">1922</option>
<option value="1923">1923</option>
<option value="1924">1924</option>
<option value="1925">1925</option>
<option value="1926">1926</option>
<option value="1927">1927</option>
<option value="1928">1928</option>
<option value="1929">1929</option>
<option value="1930">1930</option>
<option value="1931">1931</option>
<option value="1932">1932</option>
<option value="1933">1933</option>
<option value="1934">1934</option>
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
</select>&nbsp;<a href="http://localhost/tportal/tbl_kon_berita_add.php#" onclick="javascript:var v=show_calendar(&#39;updatevalue_waktu&#39;, document.forms.editform.tsvalue_waktu.value,false,false); return false;"><img src="./lib/cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the date"></a><input type="hidden" name="tsvalue_waktu" value="0-0-0"><input type="hidden" name="value_waktu" value=""><script language="JavaScript">
function SetDatevalue_waktu()
{ 
  if (document.forms.editform.monthvalue_waktu.value!='' && document.forms.editform.dayvalue_waktu.value!='' && document.forms.editform.yearvalue_waktu.value!='') {
	document.forms.editform.value_waktu.value= ''+document.forms.editform.yearvalue_waktu.value + 
 	'-' + document.forms.editform.monthvalue_waktu.value + '-' + document.forms.editform.dayvalue_waktu.value; 
   document.forms.editform.tsvalue_waktu.value='' + document.forms.editform.dayvalue_waktu.value+'-'+document.forms.editform.monthvalue_waktu.value+'-'+document.forms.editform.yearvalue_waktu.value;
  } else {
	document.forms.editform.tsvalue_waktu.value= '0-0-0';
	document.forms.editform.value_waktu.value= '';
   } 
 } 
 SetDatevalue_waktu(); 

	function updatevalue_waktu(newDate) 
{ 
	var dt_datetime; 
 	var curdate = new Date(); 
		dt_datetime = newDate;
		document.forms.editform.value_waktu.value =  dt_datetime.getFullYear() + '-' + (dt_datetime.getMonth()+1) + '-' + dt_datetime.getDate();
		document.forms.editform.dayvalue_waktu.selectedIndex = dt_datetime.getDate();
		document.forms.editform.monthvalue_waktu.selectedIndex = dt_datetime.getMonth()+1;
		for(i=0; i<document.forms.editform.yearvalue_waktu.options.length;i++)			if(document.forms.editform.yearvalue_waktu.options[i].value==dt_datetime.getFullYear())			{				document.forms.editform.yearvalue_waktu.selectedIndex=i;				break;			}  	document.forms.editform.tsvalue_waktu.value = dt_datetime.getDate() + '-' + (dt_datetime.getMonth()+1) + '-' + dt_datetime.getFullYear();
	}
 </script>
<input type="hidden" name="waktu" value="date13"> 
      &nbsp;<img src="./lib/icon_required.gif"> </td></tr>
  <tr>
    <td class="shade" width="150">pilihan</td>
    <td width="250"><select name="pilihan" id="pilihan">
           <?
		  
			
			$myquery="SELECT typenews FROM tbl_typenews order by typenews";
			$result = mysql_query($myquery);
			
			if (!$result) {
    			$message  = 'Invalid query: ' . mysql_error() . "\n";
    			$message .= 'Whole query: ' . $query;
    			die($message);
				}
				
			while ($row = mysql_fetch_assoc($result)) {
				$typenews = $row['typenews'];
				
				echo "<option value='$typenews'>$typenews</option>";
			}

			mysql_free_result($result);
			
			mysql_close();
			
		  ?>
      </select> </td></tr>
  <tr>
    <td class="shade" width="150">judul</td>
    <td width="250"><input type="text" name="value_judul" maxlength="60" value=""> 
    </td></tr>
  <tr>
    <td class="shade" width="150">berita</td>
    <td width="250"><textarea name="value_berita" style="width: 500px;height: 250px;"></textarea> </td></tr>
  <tr>
    <td class="shade" width="150">pictire</td>
    <td width="250"><input type="file" name="file" id="file" /> </td></tr>
  
  <tr height="50">
    <td colspan="2" align="middle"><input id="submit1" class="button" value="Save" type="submit" name="submit1"> 
<input class="button" value="Reset" type="reset"> <input type="hidden" name="a" value="added"></td></tr><!-- legend -->
  <tr height="50">
    <td colspan="2" align="left">
      <hr size="1" width="400" noshade="">
      <br><img src="./lib/icon_required.gif"> - Required field 
</td></tr></tbody></table> 
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
</form><div style="position: fixed; margin: 0px; padding: 0px; z-index: 999999; top: 0px; right: 0px; display: none;"><div id="default-tab-outer-wrapper">
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