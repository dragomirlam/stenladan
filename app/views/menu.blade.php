<!doctype html>
<html>
	<head>
		<title>Menu</title>
		{{ HTML::style('css/style.css'); }}
	</head>
	<body>
		<div id="header">
			<a href="#" id="logo">{{ HTML::image('images/logo.png', 'alt-text') }}</a>
	        <nav>
	            <a href="#" id="menu-icon"></a>
	            <ul>
	                <li><a href="http://localhost:8000/">Home</a></li>
	                <li><a href="http://localhost:8000/events">Events</a></li>
	                <li><a href="#" class="current">Menu</a></li>
	                <li><a href="http://localhost:8000/about">About</a></li>
	                <li><a href="http://localhost:8000/contact">Contact</a></li>
	            </ul>
	        </nav>
	    </div>
	    <div id="top">
	    	<h1>Menu</h1>
    	</div>
		<div id="footer">
		</div>
	</body>
</html>