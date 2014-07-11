<!doctype html>
<html>
	<head>
		<title>Menu</title>
		{{ HTML::style('css/style.css'); }}
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
		<div id="footer">
		</div>
	</body>
</html>