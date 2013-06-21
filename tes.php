<?php
include("func/fbCon.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8"><!--[if IE]><![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>AppStore</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Jan Simecek - http://themeforest.net/user/xRicrdx">
    
    
    
    <!-- Web App Data -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    
    
    
    <!-- iPhone ICON -->
    <link href="apple-touch-icon-57x57.png" sizes="57x57" rel="apple-touch-icon">
    <!-- iPad ICON-->
    <link href="apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <!-- iPhone (Retina) ICON-->
    <link href="apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
	<!-- iPad (Retina) ICON-->
	<link href="apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon">



	<!-- iPhone SPLASHSCREEN-->
	<link rel="apple-touch-startup-image" media="(device-width: 320px)" href="apple-touch-startup-image-320x460.png">
	<!-- iPhone (Retina) SPLASHSCREEN-->
	<link href="images/startup-iphone-retina.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<!-- iPad (portrait) SPLASHSCREEN-->
	<link href="apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
	<!-- iPad (landscape) SPLASHSCREEN-->
	<link href="apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
	<!-- iPad (Retina, portrait) SPLASHSCREEN-->
	<link href="apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<!-- iPad (Retina, landscape) SPLASHSCREEN-->
	<link href="apple-touch-startup-image-1496x2048.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<!-- =Web App Data -->
	
    
    
    
    
    <!--     Fixes    -->
    <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!--    =Fixes    -->
    
    
    
    
    
    
    <!--        Import Styles-->
    <link rel="stylesheet" href="css/style.css" title="Main CSS" type="text/css" media="screen">
    <!--        =Import Styles-->
    
    <style type="text/css"> 
 
	 .social {
	  	
	    -webkit-border-radius: 4px;
	    -moz-border-radius: 4px;
	    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
	    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    -webkit-transition-duration: 0.2s;
	    -moz-transition-duration: 0.2s;
	    transition-duration: 0.2s;
	    -webkit-user-select:none;
	    -moz-user-select:none;
	    -ms-user-select:none;
	    user-select:none;
	  
	}
	.social:hover {
	    text-decoration: none;
	}
	.social:active {
	    -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	    -moz-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	    box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	}
	  .social2 {
	  	
	    -webkit-border-radius: 4px;
	    -moz-border-radius: 4px;
	    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
	    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    -webkit-transition-duration: 0.2s;
	    -moz-transition-duration: 0.2s;
	    transition-duration: 0.2s;
	    -webkit-user-select:none;
	    -moz-user-select:none;
	    -ms-user-select:none;
	    user-select:none;
	    background: black;
	}
	.social2:hover {
	    background: black;
	    
	    text-decoration: none;
	}
	.social:active {
	    -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	    -moz-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	    box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	    background: black;
	   
	}
	
	</style>
    
    
    
    <!--        Import Fonts -->
    <!--       =Import Fonts -->
    
    
    
   
    
    <!--        Import Scripts-->
	<script src="js/klass.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery.js"><\/script>')</script>
	<script src="js/libs.js"></script>
	<script src="js/scripts.js"></script>
    <!--        =Import Scripts-->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    
   
    
</head>
<body>
    <!-- Wrapper -->
    <section id="wrapper">
		<!-- Aside -->
		<aside id="sidebar">
			<ul id="listMenu">
				<li class="logo"><img src="imagesPreview/160/010.jpg" height="60" alt="logo"> App Logo</li>
                <p>
					<input name="Search Apps" type="text" id="Search Apps" size="30" value="" class="searchApps" placeholder="Search Apps"/>
				</p>
				<li><a href="index.php">Global Feed</a></li>
                
				<li class="title">My App Feed</li>
                <li><a href="feed-app.html">Applications</a></li>
                <li><a href="feedGames.php">Games</a></li>
                
				<?php
				if(!empty($name))
				{
					echo "<li class='title'>Info</li>";
					echo "<li><a href='profile.html'>My Profile</a></li>";
				}else{
				?>
				
				
                <div class="fb-connect"><a href="http://202.43.173.196/html5/roy2/func/fbCon/public_html/index.php"><img src="images/fb-connect.png" width="200px" alt="fb-connect"></a></div>
                <? } ?>
			</ul>
		</aside>
		<!-- =Aside -->
    
    
    
    
    	<!-- Content Wrapper -->
	    <section id="contentWrapper">   
	    
	    
	    
	         
		    <!--    Header   -->
	        <header id="header">
		        <a id="topBarIconMenu"></a>
		        <div id="textLogo">
		        <?php
				if(!empty($name))
				{
					echo "Welcome back $name";
				}else
				{
				?>
		        Global Feed
		        <?}?>
		        </div>
		        <!-- Optional Text Headline <h1 id="textLogo">Ultimate</h1> -->
	        </header>
	        <!--      =Header    -->
	        
	       
	       
	       	        	        
	        <div class="siteLoader">
			    <span></span>
			    <span></span>
			    <span></span>
			</div>
	        
	        
	        
	        
	        
	        <!--      Main Content-->
	        <section id="content">
            
           	  <div class="social">
       	  			<ul class="socFeed">
       	  			<?
       	  			include_once("func/feed.php");
       	  			?>
                    <!--	<li>176 Users Add in <a href="#">SPORTS</a> App</li>
                        <li>Your Facebook friend Ahmad added <a href="#">Puzzle</a> games into his Feed</li>
                        <li><a href="#">FIFA 2013</a> has been downloaded 1256 times</li>
                        <li>Your Facebook friend <a href="#">Zainul</a> joined AppStore</li>
                        <li>Junaidi just bought <a href="#">FIFA 2013</a></li>
                     -->
                    </ul>
                    <a class="arrowUp" href="#"><img src="images/arrowUp.png" width="20" height="20" alt="up"></a>
                    <div class="clearfix"></div>
              </div>
              
              
              
              <div class="social2">
       	  			<ul class="socFeed">
       	  			<?
       	  			include_once("func/feed2.php");
       	  			?>
                    </ul>
                    <a class="arrowUp" href="#" title="Home" rel="homepage"><img src="images/arrowUp.png" width="20" height="20" alt="up"></a>
                    <div class="clearfix"></div>
              </div>
              
              
              
              <script>
				$(document).ready(function() {
					$('.social').show();
					$('.social2').hide();
					$('.social').click(function(){ 
							$ ('.social').hide();
							$ ('.newLabel').hide();
							$ ('.social2').show();
						return false;
					});	
					
					
					$('.social2').click(function(){ 
							$ ('.social2').hide();
							$ ('.social').show();
						return false;
					});	
				});
				
				
				</script>	
            
		        <ul class="galleryThreeColumnList">
                	<div id="topBC">
                        <div class="catTitleAction">Action<a class="addtoCat" href="#">+</a></div>
                        <div class="catTitleSport">Sport<a class="addtoCat" href="#">+</a></div>
                        <div class="catTitleAdventure">Adventure<a class="addtoCat" href="#">+</a></div>
                        <div class="catTitlePuzzle">Puzzle<a class="addtoCat" href="#">+</a></div>
                        <div class="catTitleRacing">Racing<a class="addtoCat" href="#">+</a></div>
                        
                        
                        
                        
                        
                        <div class="catTitleSwipeAction"><a class="btn-next" href="index.php">Action</a></div>
                        <div class="catTitleSwipeSport"><a class="btn-next" href="index.php">Sport</a></div>
                        <div class="catTitleSwipeAdventure"><a class="btn-next" href="index.php">Adventure</a></div>
                        <div class="catTitleSwipePuzzle"><a class="btn-next" href="index.php">Puzzle</a></div>
                        <div class="catTitleSwipeRacing"><a class="btn-next" href="index.php">Racing</a></div>
                        
                        
                        
                        
                        <div class="catTitleSwipe2"><a class="btn-next" href="index.php">News & Magazines2</a></div>
                        <div class="clearfix"></div>
                    </div>
   					
   					<script>
						$(document).ready(function() {
							$('.catTitleAction').show();
							$('.catTitleSwipeSport').show();
							$('.boxContent1').show();
							$('.catTitleSport').hide();
							$('.catTitleAdventure').hide();
							$('.catTitlePuzzle').hide();
							$('.catTitleRacing').hide();
							
							$('.catTitleSwipeAction').hide();
							$('.catTitleSwipeAdventure').hide();
							$('.catTitleSwipePuzzle').hide();
							$('.catTitleSwipeRacing').hide();
							
							$('.catTitleSwipeSport').click(function(){ 
									$('.catTitleSwipeAction').hide();
									$('.catTitleSwipeSport').hide();
									$('.catTitleSwipePuzzle').hide();
									$('.catTitleSwipeRacing').hide();
									$ ('.boxContent2').hide();
									$ ('.catTitleSwipeAdventure').show();
									$ ('.catTitleSport').show();
									$ ('.boxContent1').show();
								return false;
							});	
							
							
							$('.catTitleSwipe2').click(function(){ 
									$ ('.catTitleSwipe2').hide();
									$ ('.boxContent1').show();
									$ ('.catTitleSwipe1').show();
								return false;
							});	
						});
						
						
						</script>
   					
   					<!-- box content2 -->  
   					<div class="boxContent1">              
					<?php
					mysql_connect("172.16.55.7","bontank","p4ssb0nt4nk");
					mysql_select_db("cms9495");
					
					
					$qry = mysql_query("select * from menu_games where nm_menu='Wap - Premium' limit 10");
					while($data = mysql_fetch_array($qry)):
					$title = $data['title'];
					$objectId = $data['objectId'];
					$orderingCode = $data['orderingCode'];
					$keyword = $data['keyword'];
					$cover = $data['cover'];
					
					
					echo "<li><span class='newLabel'>NEW</span><a href='detail.php?objectId=$objectId'><img src='http://202.43.173.196/cms/cover/".$cover."' height='100px'/></a><div class='appname'>$title</div></li>";
					
					endwhile;
					mysql_close();
					?> 
					</div> 
					
					
					<!-- box content2 -->  
   					<div class="boxContent2">              
					<?php
					mysql_connect("172.16.55.7","bontank","p4ssb0nt4nk");
					mysql_select_db("cms9495");
					
					
					$qry = mysql_query("select * from menu_games where nm_menu='Wap - Termurah' limit 10");
					while($data = mysql_fetch_array($qry)):
					$title = $data['title'];
					$objectId = $data['objectId'];
					$orderingCode = $data['orderingCode'];
					$keyword = $data['keyword'];
					$cover = $data['cover'];
					
					
					echo "<li><span class='newLabel'>NEW</span><a href='detail.php?objectId=$objectId'><img src='http://202.43.173.196/cms/cover/".$cover."' height='100px'/></a><div class='appname'>$title</div></li>";
					
					endwhile;
					mysql_close();
					?> 
					</div>               
								       
					<!-- end of box content -->	
					
		        </ul>
	        </section>
	        <!--    =Main Content-->
        </section>
    	<!-- =Content Wrapper -->
    </section>
    <!-- =Wrapper -->
</body>
</html>