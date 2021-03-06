﻿<!DOCTYPE html>
<html manifest="offline.appcache">
<head>
    <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php if($_GET["from"]!=null)echo $_GET["from"]." wishes you a Happy New Year"; else echo "Happy New Year" ;?></title>
	
	<!-- Standardised web app manifest -->
	<link rel="manifest" href="app.manifest" />
	
	<!-- Allow fullscreen mode on iOS devices. (These are Apple specific meta tags.) -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />	
	<link rel="apple-touch-icon" sizes="256x256" href="icon-256.png" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="Description" content="<?php if($_GET["to"]!=null)echo $_GET["to"]."! A greeting is awaiting you. Click on the link to view"?>">
	<link rel='image_src' href='pics/<?php echo $_GET["template"].".jpg" ?> '/>
	<!-- Chrome for Android web app tags -->
	<meta name="mobile-web-app-capable" content="yes" />
	<link rel="shortcut icon" sizes="256x256" href="icon-256.png" />
	<script>
	
	<?php
		$get_message_refined=str_replace("\r\n","\\n",$_GET["message"]);
		if($_GET["to"]!=null)
		 echo "var messageTo=\"Dear ".$_GET["to"]."\";";
		else 
		 echo "var messageTo=\"\";";

		if($_GET["message"]!=null&&$_GET["from"]!=null){
		
		 //$get_message_refined=str_replace("\r\n","\\n",$_GET["message"]);
		 echo "var messageMain=\"".$get_message_refined."\\n\\nFrom ".$_GET["from"]."\";";
		}
		else if($_GET["message"]!=null){
		 //$get_message_refined=str_replace("\r\n","\\n",$_GET["message"]);
		 echo "var messageMain=\"".$get_message_refined."\";";
		}
		else	
		 echo "var messageMain=\"\";";	
		
		if($_GET["message"]==null&&$_GET["from"]!=null)
		 echo "var messageFrom=\"From ".$_GET["from"]."\";";	
		else
		 echo "var messageFrom=\"\";";

		 $url="http%3A%2F%2Fwww.wishesandgreetings.tk%2Fnewyear"."%2F%3Fto%3D".$_GET["to"]."%26message%3D".$get_message_refined."%26from%3D".$_GET["from"]."%26template%3D".$_GET["template"];
		 if(isset($_COOKIE["semaphore"]))
		 {
		 	$myfile = fopen("log.txt", "a") or die("Unable to open file!");
			$txt = $url."\r\n";
			fwrite($myfile, $txt);
			fclose($myfile);
		 }
	?>
	if ( (screen.width < 800) && (screen.height < 600) ) { 
   	 window.location = <?php echo "\"http://www.wishesandgreetings.tk/newyear/mobile.php?to=".$_GET["to"]."&message=".$get_message_refined."&from=".$_GET["from"]."&template=".$_GET["template"]."\"";?>;
    } 
	</script>
    <!-- All margins and padding must be zero for the canvas to fill the screen. -->
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
		}
		html, body {
			background: #000;
			color: #fff;
			overflow: hidden;
			touch-action: none;
			-ms-touch-action: none;
		}
		canvas {
			touch-action-delay: none;
			touch-action: none;
			-ms-touch-action: none;
		}
		.modal-content {
             border-radius: 0;    
        }
        #home, #post, #share {
             border-radius: 0;    
        }
        #footer
		{
			position: fixed;
			bottom: 0px;
			width: 100%;
			
		}
    </style>
	
</head> 
 
<body> 
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1576106629269475&version=v2.0";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="footer" align="center">
	<button type="button" class="btn btn-danger btn-xs " data-toggle="modal" data-target="#mymodal" id="post">Publish this Webpage on <?php if($_GET["to"]!=null)echo "<b>".$_GET["to"]."'s</b>"; else echo "your friend's";?>  timeline</button>
    <button type="button" class="btn btn-danger btn-xs " id="home"  data-target="">Click Here to create Your Own</button>
    <button type="button" class="btn btn-danger btn-xs " id="share"  data-target="">Share this Website on facebook</button>  	</div>
	
	<!--  modals -->
<div class="modal fade" id="mymodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Post your greeting </h4>
      </div>
      <div class="modal-body">
      	<p>You can now do the following stuffs...</p>
        <p>>> Greet by publishing your customized Webpage on <?php if($_GET["to"]!=null)echo "<b>".$_GET["to"]."'s</b>"; else echo "your friend's";?> timeline by clicking the share button bellow.</p>
        <p>>> Copy the URL from the textbox and share it with your friends.</p>
        <textarea class="form-control" id="urltextbox" name="message" rows="2" placeholder="" ></textarea>
      </div>
      <div class="modal-footer">
        <iframe width="120px" height="20px"  src="http://www.facebook.com/plugins/share_button.php?href=<?php echo $url;?>&amp;layout=button&amp;appId=1576106629269475" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<!-- The canvas must be inside a div called c2canvasdiv -->
	<div id="c2canvasdiv">
	
		<!-- The canvas the project will render to.  If you change its ID, don't forget to change the
		ID the runtime looks for in the jQuery events above (ready() and cr_sizeCanvas()). -->
		<canvas id="c2canvas" width="854" height="480">
			<!-- This text is displayed if the visitor's browser does not support HTML5.
			You can change it, but it is a good idea to link to a description of a browser
			and provide some links to download some popular HTML5-compatible browsers. -->
			<h1>Your browser does not appear to support HTML5.  Try upgrading your browser to the latest version.  <a href="http://www.whatbrowser.org">What is a browser?</a>
			<br/><br/><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Microsoft Internet Explorer</a><br/>
			<a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br/>
			<a href="http://www.google.com/chrome/">Google Chrome</a><br/>
			<a href="http://www.apple.com/safari/download/">Apple Safari</a><br/>
			<a href="http://www.google.com/chromeframe">Google Chrome Frame for Internet Explorer</a><br/></h1>
		</canvas>
		
	</div>
	
	<!-- Pages load faster with scripts at the bottom -->
	
	<!-- Construct 2 exported games require jQuery. -->
	<script src="jquery-2.0.0.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
    <!-- The runtime script.  You can rename it, but don't forget to rename the reference here as well.
    This file will have been minified and obfuscated if you enabled "Minify script" during export. -->
    <?php 
    	if($_GET["template"]==1) echo "<script src='1.js'></script>";
    	else if($_GET["template"]==2) echo "<script src='2.js'></script>";
    	else if($_GET["template"]==3) echo "<script src='3.js'></script>";
    	else if($_GET["template"]==4) echo "<script src='4.js'></script>";
    	else if($_GET["template"]==5) echo "<script src='5.js'></script>";
    	else if($_GET["template"]==6) echo "<script src='6.js'></script>";
    	else if($_GET["template"]==7) echo "<script src='7.js'></script>";
    ?>
	
    <script>
	function getCookie(cname) {
   	 var name = cname + "=";
   	 var ca = document.cookie.split(';');
  	  for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
	}  	 

  		function deleteCookie(cname)
  		{
  			document.cookie=cname+"=; expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";
  			
 		 }
    	function checkCookie(cname) {
           var user=getCookie(cname);
   		   if (user != "") {
   		     return 1;
    	  } else {
      		 return 0;
     	  }
  	  }	
    	
		// Size the canvas to fill the browser viewport.
		jQuery(window).resize(function() {
			cr_sizeCanvas(jQuery(window).width(), jQuery(window).height());
		});
		
		// Start the Construct 2 project running on window load.
		jQuery(document).ready(function ()
		{	
			// Create new runtime using the c2canvas
			cr_createRuntime("c2canvas");
			$('#urltextbox').val(window.location.href); 
			 //$("#urltextbox").attr("href",window.location.href);
			if (checkCookie("semaphore")===1) {
    				$('#mymodal').modal('show');
    				deleteCookie("semaphore");
			}
			 
		});
		
		// Pause and resume on page becoming visible/invisible
		function onVisibilityChanged() {
			if (document.hidden || document.mozHidden || document.webkitHidden || document.msHidden)
				cr_setSuspended(true);
			else
				cr_setSuspended(false);
		};
		//button to link homepage
		$(function(){
   		 $('#home').click(function(){
        	window.location='../index.php'
    		});
		});
		//button to share homepage
		$(function(){
   		 $('#share').click(function(){
   		 	window.open("https://www.facebook.com/sharer/sharer.php?app_id=1576106629269475&u=http%3A%2F%2Fwww.wishesandgreetings.tk%2F&display=popup&ref=plugin", "yyyyy", "width=480,height=360,resizable=no,toolbar=no,menubar=no,location=no,status=no");
        	
    		});
		});
		
		document.addEventListener("visibilitychange", onVisibilityChanged, false);
		document.addEventListener("mozvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("webkitvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("msvisibilitychange", onVisibilityChanged, false);
		
    </script>
</body> 
</html> 