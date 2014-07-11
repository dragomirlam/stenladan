<!doctype html>
<html>
	<head>
		<title>Contact</title>
		{{ HTML::style('css/style.css'); }}

		<!-- Google maps -->
		{{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp'); }}
		{{ HTML::script('javascript/google_maps.js'); }}		
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
	                <li><a href="http://localhost:8000/menu">Menu</a></li>
	                <li>|</li>
	                <li><a href="#" class="current">About</a></li>
	                <li>|</li>
	                <li><a href="http://localhost:8000/contact">Contact</a></li>
	            </ul>
	        </nav>
	    </header>
	    <div id="map-canvas">
    	</div>
    	<div id="main-container">
    	</div>
		<div id="footer">
		</div>
	</body>
</html>