<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>STENladan</title>
		{{ HTML::style('css/style.css'); }}
		
		{{ HTML::style('css/gallery-css/dist/gallery.theme.css'); }}
		{{ HTML::style('css/gallery-css/dist/gallery.prefixed.css'); }}
		{{ HTML::style('css/gallery-css/vendor/normalize.css'); }}
		<!-- {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js') }}
		{{ HTML::script('responsiveslides.min.js') }} -->
	</head>
	<body>
		<div id="header">
			<a href="#" id="logo">{{ HTML::image('images/logo.png', 'alt-text') }}</a>
	        <nav>
	            <a href="#" id="menu-icon"></a>
	            <ul>
	                <li><a href="#" class="current">Home</a></li>
	                <li><a href="http://localhost:8000/events">Events</a></li>
	                <li><a href="http://localhost:8000/menu">Menu</a></li>
	                <li><a href="http://localhost:8000/about">About</a></li>
	                <li><a href="http://localhost:8000/contact">Contact</a></li>
	            </ul>
	        </nav>
	    </div>
	    <div id="carousel">
	    	<div class="gallery autoplay items-3">
				<div id="item-1" class="control-operator"></div>
				<div id="item-2" class="control-operator"></div>
				<div id="item-3" class="control-operator"></div>

				<figure class="item">
				  {{ HTML::image('images/stenladan.jpg', 'alt-text') }}
				</figure>

				<figure class="item">
				  <h1>Item 2</h1>
				</figure>

				<figure class="item">
				  <h1>Item 3</h1>
				</figure>

				<div class="controls">
				  <a href="#item-1" class="control-button">•</a>
				  <a href="#item-2" class="control-button">•</a>
				  <a href="#item-3" class="control-button">•</a>
				</div>
			</div>
		</div>
    	<div id="top">
    		{{ HTML::image('images/party.jpg', 'alt-text') }}
    	</div>
		<div id="footer">
		</div>
	</body>
</html>
