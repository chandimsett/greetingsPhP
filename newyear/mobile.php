<html>
<head>
	<title><?php if($_GET["from"]!=null)echo $_GET["from"]." wishes you a Happy New Year"; else echo "Happy New Year" ;?></title>
    <meta name="Description" content="<?php if($_GET["to"]!=null)echo $_GET["to"]."! A greeting is awaiting you. Click on the link to view"?>">
    <link rel='image_src' href='pics/<?php echo $_GET["template"].".jpg" ?> '/>
    <script>
	alert("Your mobile can't process that greeting. Try using tab, Pc or laptop. However the greeting is simplified in the mobile webpage version :)");
	</script>
	<?php
		$get_message_refined=str_replace("\r\n","<br>",$_GET["message"]);
		$get_message_refined=str_replace("\\n","<br>",$_GET["message"]);//for javascript processing
		$get_message_refined_url=str_replace("\r\n","\\n",$_GET["message"]);
		if($_GET["to"]!=null)
		 $messageTo="Dear ".$_GET["to"];
		else 
		 $messageTo="";

		if($_GET["message"]!=null&&$_GET["from"]!=null)
		 $messageMain=$get_message_refined."<br><br>From ".$_GET["from"];
		else if($_GET["message"]!=null)		
		 echo $messageMain=$get_message_refined;
		else 
		 $messageMain="";
		
		if($_GET["message"]==null&&$_GET["from"]!=null)
		 $messageFrom="From ".$_GET["from"];	
		else
		 $messageFrom="";

		 $url="http%3A%2F%2Fwww.wishesandgreetings.tk%2Fnewyear"."%2F%3Fto%3D".$_GET["to"]."%26message%3D".$get_message_refined_url."%26from%3D".$_GET["from"]."%26template%3D".$_GET["template"];
	?>
<style>
    body {
	background-image: url(mobile-bg/bg.jpg);
	background-color: #cccccc;
	background-repeat: repeat;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: x-large;
	text-align: center;
	text-shadow: 2px 1px #1E35C3;
    }
	#greet{
		font-size:xx-large;
		font-align:center;
	}
	#footer
	{
	
	bottom: 0px;
	width: 100%;
	color: #F4E0E1;
	}
    a:link {
	color: #F3E9E9;
	text-decoration: underline;
}
a:hover {
	color: #C7D9E7;
	text-decoration: none;
}
    a:visited {
	text-decoration: underline;
	color: #F4EDED;
}
a:active {
	text-decoration: underline;
}
    body,td,th {
	color: #F1CECF;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body >
<p>	 <?php echo $messageTo; ?></p>
<div id="greet">
<p>WISH YOU A VERY<br>
HAPPY NEW YEAR</p>
</div>
<p><?php echo $messageMain; ?></p>
<p><?php echo $messageFrom; ?></p>
<p>&nbsp;</p>
<div id="footer">
<p><a href="https://www.facebook.com/sharer/sharer.php?app_id=1576106629269475&u=<?php echo $url;?>&display=popup&ref=plugin" target="new">Post on  
  <?php  if($_GET["to"]!=null)echo $_GET["to"]."'s"; else echo "your friend's"; ?> timeline </a>| <a href="https://www.facebook.com/sharer/sharer.php?app_id=1576106629269475&u=http%3A%2F%2Fwww.wishesandgreetings.tk%2Findex2.php%2F&display=popup&ref=plugin" target="new">Share on Facebook </a>| <a href="https://www.wishesandgreetings.tk/" target="new">Create Your Own</a></p>
</div>
</body>
</html>