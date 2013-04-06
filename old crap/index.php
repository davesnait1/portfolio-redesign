<?php
	/*  
		HOUSEKEEPING TO DO LIST:
			
			- Make menus into <ul>s
			x Redesign with Twitter Bootstrap (CONFLICTS WITH JQUERY-UI)
      - Setup jQuery examples to be loaded with AJAX
        - Image Slider (slicebox.php)
        - Masonry Dynamic layout (masonry.php)
        - jQuery UI (jquery-ui.php)
        - Flot Charts (flot-charts.php)
        - Google Maps (google-maps.php)
      - Include links to other projects
        - CodeIgniter
        - CJSR Website (custom wordpress theme)
        - Joomla Project
        - Backbone Application (Handlebars templating, Twitter Bootstrap)
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>jQuery Examples</title>
	<!-- JQuery UI -->
    <link href="css/pepper-grinder/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery-1.9.0/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.0/jquery-ui-1.10.0.custom.js"></script>
	<!-- Bootstrap 
	<link href="css/bootstrap-responsive.css" rel="stylesheet" />
	<script type="text/javascript" src="js/bootstrap-2.3.1/bootstrap.js"></script>
	-->
    
<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />

    <!--  THESE ARE THE LINKED SHEETS TO EDIT/ADD TO  -->
<link rel="stylesheet" type="text/css" href="css/style.css"> 
<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<div id="outerWrap">
<div id="wrap">
	<div id="header"><h1>jQuery Examples</h1></div>
	<div id="nav">
      <a href="slicebox.php">Slicebox Demo</a> | 
      <a href="noscript.html">No Script Page</a> | 
      <a href="masonry.php">Masonry Site</a> | 
      <a href="#">Sollicitudin</a> | 
      <a href="#">Morbi Orci Leo</a>	
    </div><!-- /nav-->

<div id="main">
<div id="mainPadding">

		<h2>Lorem ipsum dolor sit amet</h2>
		
		<div class="wrapper">
<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="images/1.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Creative Lifesaver</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="images/2.jpg" alt="image2"/></a>
						<div class="sb-description">
							<h3>Honest Entertainer</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="images/3.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Brave Astronaut</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="images/4.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Affectionate Decision Maker</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="images/5.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Faithful Investor</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="images/6.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Groundbreaking Artist</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="images/7.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Selfless Philantropist</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>
                
                <div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

				<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
		
		</div><!-- end of wrapper -->
	<div id="accordion">
		<h3>Aenean viverra nunc in neque</h3>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra nunc in neque vestibulum laoreet. Nunc faucibus convallis sollicitudin. Donec varius nulla non lectus sodales ornare. Nullam sollicitudin odio in velit bibendum sit amet vehicula purus tempor. Aliquam mauris diam, scelerisque et consectetur in, tincidunt vitae nunc. Vestibulum adipiscing vehicula mi, ut euismod arcu dapibus quis. Vivamus convallis tellus vitae tellus tempor porta quis ut risus. In hac habitasse platea dictumst. Sed lacinia lacus a dui adipiscing placerat. Morbi sit amet purus sodales purus tristique facilisis nec sit amet est. Ut ut dui nisl, in bibendum nisl.</p>
		
<h3>Vivamus quis orci turpis</h3>
<p>Vivamus quis orci turpis. Morbi nulla dolor, dapibus quis posuere quis, elementum quis sem. In at enim at enim dapibus auctor. Suspendisse pretium feugiat dolor, ut tristique velit rhoncus vitae. Vestibulum nibh est, malesuada a congue at, mattis at sapien. Pellentesque et lorem non sapien porta tincidunt. Aliquam dolor tellus, posuere a placerat et, dignissim quis lectus.</p>
<h3>Duis convallis interdum</h3>
<p>Donec fringilla magna sit amet nisi lacinia rhoncus. Duis convallis interdum lacus non ornare. Maecenas tempor metus at sem malesuada quis aliquam nunc ornare. Sed est est, vulputate at accumsan et, rutrum id eros. Duis ac orci sed quam facilisis gravida. Sed gravida, lectus in pretium suscipit, urna odio vestibulum lorem, interdum consectetur nisl nisi ac nibh. </p>
	
</div>	
		
<!--BUILD YOUR OWN FORM TO BE LAUNCHED WITHIN A DIALOG -->
 <div id="dialog-form" title="Create new user">
  <p class="validateTips">All form fields are required.</p>
 
  <form>
  <fieldset>
    <label for="company">Company</label>
    <input type="text" name="company" id="company" value="" class="text ui-widget-content ui-corner-all" />
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" />
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" />
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="" class="text ui-widget-content ui-corner-all" />
    <label for="url">URL</label>
    <input type="text" name="url" id="url" value="" class="text ui-widget-content ui-corner-all" />
    <label for="description">Description</label>
    <textarea name="description" id="description" value="" class="text ui-widget-content ui-corner-all"></textarea>
   
   	<label for="country">Country</label>
    <input type="text" name="country" id="country" value="" class="text ui-widget-content ui-corner-all" />
    <label for="province">Province</label>
    <input type="text" name="province" id="province" value="" class="text ui-widget-content ui-corner-all" />
    <label for="city">City</label>
    <input type="text" name="city" id="city" value="" class="text ui-widget-content ui-corner-all" />
     <label for="address">Address</label>
    <input type="text" name="address" id="address" value="" class="text ui-widget-content ui-corner-all" />
    
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all" />
  </fieldset>
  </form>
</div>
 <button id="register-user">Register</button>
		</div>
	</div>
	<div id="sidebar">
    
    
  
      <div id="sideBarHeading">
      SideBar Heading
      </div>
      <p>
      <b>Sub Heading</b><br />
      <a href="#">Link 1</a> | 
      <a href="#">Link 2</a> | 
      <a href="#">Link 3</a>
     
      </p>
     
      <div id="sideBarHeading">
      SideBar Heading
      </div>
      <p>
      <b>Sub Heading</b><br />
      <ul>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
      </ul>
      </p>
     
      <div id="sideBarHeading">
      SideBar Heading
      </div>
      <p>
      <b>Sub Heading</b><br />
      	Nulla convallis aliquet ipsum, vitae adipiscing enim sagittis sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
      </p>
      
   
      
	</div>
		<br style="clear:both;" />	
	</div>
</div>
<script type="text/javascript" src="js/slicebox/modernizr.custom.46884.js"></script>
<script type="text/javascript" src="js/slicebox/jquery.slicebox.js"></script>
<script type="text/javascript" src="js/slicebox/sliceboxfuncs.js"></script>

</body>
</html>

