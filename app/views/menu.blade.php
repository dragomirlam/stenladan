<!doctype html>
<html>
	<head>
		<title>Menu</title>
		{{ HTML::style('css/style.css'); }}

		<!-- Facebook JS-SDK -->
		{{ HTML::script('javascript/facebook-jssdk.js'); }}
	</head>
	<body>
		<header>
			<a href="http://localhost:8000/" id="logo">{{ HTML::image('images/logo.png', 'alt-text') }}</a>
	        <nav>
	            <a href="#" id="menu-icon"></a>
	            <ul>
	                <li><a href="http://localhost:8000/">Home</a></li>
	                <li>|</li>
	                <li><a href="http://localhost:8000/events">Events</a></li>
	                <li>|</li>
	                <li><a href="#" class="current">Menu</a></li>
	                <li>|</li>
	                <li><a href="http://localhost:8000/about">About</a></li>
	                <li>|</li>
	                <li><a href="http://localhost:8000/contact">Contact</a></li>
	            </ul>
	        </nav>
	    </header>
	    <div id="main-container">
	    	<h1>Menu</h1>
    	</div>
		<div id="social-networks-container">
			<div>
				{{ HTML::image('images/facebook-logo.png') }}
			</div>
    		<div id="facebook-plugin" class="fb-like-box" data-href="https://www.facebook.com/pages/STENladan/132228016823173" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
    		</div>
    		<div>
    			<a href="https://foursquare.com/v/stenladan/4dcbad0fe4cde609a39d549c">
    				{{ HTML::image('images/foursquare-logo.png') }}
    			</a>
    		</div>
    	</div>
		<div id="footer">
			<div>
				© Copyright 2014 by <b>STENladan</b>. All Rights Reserved.
			</div>
		</div>
	</body>
</html>