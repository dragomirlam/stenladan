<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>STENladan</title>
		{{ HTML::style('css/style.css'); }}
	</head>
	<body>
		<div id="header">
			<a href="#" id="logo">{{ HTML::image('images/logo.png', 'alt-text') }}</a>
	        <nav>
	            <a href="#" id="menu-icon"></a>
	            <ul>
	                <li><a href="#" class="current">Home</a></li>
	                <li><a href="#">Events</a></li>
	                <li><a href="#">Menu</a></li>
	                <li><a href="#">About</a></li>
	                <li><a href="#">Contact</a></li>
	            </ul>
	        </nav>
	    </div>    
    	<div id="top" height="50px">
    		{{ HTML::image('images/stenladan.jpg', 'alt-text') }}
    	</div>
		<div id="content">
			{{ HTML::image('images/background3.jpg', 'alt-text') }}
		</div>

		<div id="footer">
		</div>
	</body>
</html>
