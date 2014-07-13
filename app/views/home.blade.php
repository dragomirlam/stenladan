<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>STENladan</title>
		{{ HTML::style('css/style.css'); }}

		<!-- Facebook JS-SDK -->
		{{ HTML::script('javascript/facebook-jssdk.js'); }}
		
		<!-- Carousel Gallery-CSS -->
		{{ HTML::style('css/gallery-css/dist/gallery.theme.css'); }}
		{{ HTML::style('css/gallery-css/dist/gallery.prefixed.css'); }}
		{{ HTML::style('css/gallery-css/vendor/normalize.css'); }}
	</head>
	<body>
		<header>
			<a href="#" id="logo">{{ HTML::image('images/logo.png', 'alt-text') }}</a>
	        <nav>
	            <a href="#" id="menu-icon"></a>
	            <ul>
	                <li><a href="#" class="current">Home</a></li>
	                <li>|</li>
	                <li><a href="http://localhost:8000/events">Events</a></li>
	                <li>|</li>
	                <li><a href="http://localhost:8000/menu">Menu</a></li>
	                <li>|</li>
	                <li><a href="http://localhost:8000/about">About</a></li>
	                <li>|</li>
	                <li><a href="http://localhost:8000/contact">Contact</a></li>
	            </ul>
	        </nav>
	    </header>
	    <div id="carousel">
	    	<div class="gallery autoplay items-4">
				<div id="item-1" class="control-operator"></div>
				<div id="item-2" class="control-operator"></div>
				<div id="item-3" class="control-operator"></div>
				<div id="item-4" class="control-operator"></div>

				<figure class="item">
				  {{ HTML::image('images/sten_afternoon2.jpg', 'alt-text') }}
				</figure>

				<figure class="item">
				  {{ HTML::image('images/buffet.jpg', 'alt-text') }}
				</figure>

				<figure class="item">
				  {{ HTML::image('images/drinks.jpg', 'alt-text') }}
				</figure>

				<figure class="item">
				  {{ HTML::image('images/party.jpg', 'alt-text') }}
				</figure>

				<div class="controls">
				  <a href="#item-1" class="control-button">•</a>
				  <a href="#item-2" class="control-button">•</a>
				  <a href="#item-3" class="control-button">•</a>
				  <a href="#item-4" class="control-button">•</a>
				</div>
			</div>
		</div>
    	<div id="main-container">
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
