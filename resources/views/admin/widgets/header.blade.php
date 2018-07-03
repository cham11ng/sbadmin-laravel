<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<a class="navbar-brand" href="{{ url('/me') }}">Laravel</a>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="{{ url('/me') }}">Home</a>
			</li>
			<li class="dropdown">
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Components <span class="caret"></span></a>
          	<ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/table') }}">Tables</a></li>
            <li><a href="{{ url('/button') }}">Buttons</a></li>
            <li><a href="{{ url('/badge') }}">Labels and badges</a></li>
            <li><a href="{{ url('/alert') }}">Alerts</a></li>
            <li><a href="{{ url('/breadcrumbs') }}">Breadcrumbs and Pagination</a></li>
            <li><a href="{{ url('/glyphicons') }}">Glyphicons</a></li>
            <li><a href="{{ url('/progressBars') }}">Progress Bars</a></li>
            <li><a href="{{ url('/jumbotron') }}">Jumbotron</a></li>
            <li><a href="{{ url('/panel') }}">Panels</a></li>
            <li><a href="{{ url('/form') }}">Forms</a></li>
            <li><a href="{{ url('/navbar') }}">Navigation Bar</a></li>
            <li><a href="{{ url('/popup') }}">Popovers and Tooltips</a></li>
            <li><a href="{{ url('/collapse') }}">Collapse</a></li>
            
            </ul>
        </li>
		</ul>
	</div>
</nav> 
