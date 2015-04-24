<html>
	
	<head>
		<title>Monte Nichols</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">	
		{{ HTML::style('/css/custom.css') }}	
	</head>

	<body>
		<div id="wrapper">
			<header id="header">
				{{-- show a rudimentary navbar--}}
				<div class="tab10">
					<h1><a href="{{ URL::to ('/') }}">Monte Nichols II</a></h1>
					<ul class="no-bullets">
						<li>
							<b>Phone: </b><a href="tel:4692239087">469.223.9087</a>
						</li>
						<li>
							<b>Email: </b><a href="mailto:monte.nichols.ii@gmail.com">monte.nichols.ii@gmail.com</a></li>
						</li>
						<li>
							<b>LinkedIn: </b><a href="https://www.linkedin.com/pub/monte-nichols/90/ab8/3a">Monte Nichols</a></li>
						</li>
						<li>
							<b>GitHub: </b><a href="https://github.com/moon-tea?tab=repositories">moon-tea</a></li>
						</li>
					</ul>					
					<br>
					<br>
					<nav class="navbar-gray" role="navigation">
						<div class="navbar-inner">
							<ul class="nav">
								<a class="navlink" href="{{ URL::to ('/projects') }}">Projects</a>
								<a class="navlink" href="{{ URL::to ('/code') }}">Code</a>
								<a class="navlink" href="{{ URL::to ('/resume') }}">Resume</a>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			
			{{-- grab the appropriate content --}}
			<div>
				<content id="content">
					@yield ('content')
				</content>
			</div>			
		</div>

		<footer id="footer">			
		
		</footer>		
	</body>
</html>