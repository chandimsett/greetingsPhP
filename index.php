<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wishes &amp; Greeetings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Webpage, Dedicated Webpage, Greetings Wishes, Greet, Wishes, new year" />
  <meta name="description" content="Dedicate an entire Webpage to your friends, family and loved ones this New Year" />
  <link rel="image_src" href="newyear/pics/2.jpg" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <SCRIPT LANGUAGE="JavaScript">
   function setCookie() {
    var d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = "semaphore" + "=" + "enable" + "; " + expires+";path=/";   
   }
    
 
</SCRIPT>
  <style>
  textarea{ 
  width: 460px; 
  min-width:460px; 
  max-width:460px; 

  height:170px; 
  min-height:170px;  
  max-height:170px;
  }
  #footer
	{
	position: fixed;
	bottom: 0px;
	width: 100%;
	text-align: right;
	}

body {
	background-image: url(newyear/mobile-bg/bg4.jpg);
	background-repeat: repeat;
}
	  <!--Hi-->
  </style>
</head>
<body >

<div class="container" >
  <h2>Dedicate a Webpage for your friends family and loved ones this New Year.</h2>
  <form role="form" action="newyear/index.php" >
    <h4>Select a Design</h4>
    <h5>
      <label class="radio-inline">
        <input type="radio" name="template" value="1"  > 
        <img src="newyear/pics/1.jpg" width="200" height="120" alt=""/></label>
      <label class="radio-inline">
        <input type="radio" name="template" value="2"  checked="checked" > 
        <img src="newyear/pics/2.jpg" width="200" height="120" alt=""/></label>
      <label class="radio-inline">
        <input type="radio" name="template" value="3"  > 
        <img src="newyear/pics/3.jpg" width="200" height="120" alt=""/></label>
      <br>
      <label class="radio-inline">
        <input type="radio" name="template" value="4"  > 
        <img src="newyear/pics/4.jpg" width="200" height="120" alt=""/></label>
      <label class="radio-inline">
        <input type="radio" name="template" value="5"  > 
        <img src="newyear/pics/5.jpg" width="200" height="120" alt=""/></label>
      <label class="radio-inline">
        <input type="radio" name="template" value="6"  > 
        <img src="newyear/pics/6.jpg" width="200" height="120" alt=""/></label>
      <br>
      <label class="radio-inline">
        <input type="radio" name="template" value="7"  > 
        <img src="newyear/pics/7.jpg" width="200" height="120" alt=""/></label>
      
      
    </h5>
    <div class="form-group"  >          
      <div class="row" ><div class="col-xs-5" >
      <label  >Receipent's Name:</label>
      <input type="text" maxlength='50'  name="to" class="form-control" id="text" placeholder="To whom you want your greeting to be sent"></div></div>
      
    </div>
    <div class="form-group">
      <label >Your Greeting:</label>
      <textarea class="form-control" maxlength='350' name="message" rows="3" placeholder="Enter Your story... in 350 characters" ></textarea>
    </div>     
    <div class="form-group">
      <div class="row"><div class="col-xs-5">
      <label >Your Name:</label>
      <input type="text" name="from" maxlength='50' class="form-control" id="textarea" placeholder="Enter Your Name">
    </div></div>
    </div>
      <button type="submit" onClick="setCookie()" class="btn btn-default">GO!</button>
      <p>&nbsp;</p>
  </form>
</div>
<div id="footer">
<p>Developed by <a href="https://www.facebook.com/chandimsett" target="new" >Chandim Sett</a>  &nbsp;&nbsp;</p>
</div>
</body>
</html>
