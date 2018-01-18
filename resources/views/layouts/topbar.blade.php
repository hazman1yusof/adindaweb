<div id="top"></div>
<!-- Progress bar area -->
<div class="progress bar"></div>
<a href="#top" class="ui circular icon button" id="toTop" data-slide="slide">
	<i class="angle up icon"></i>
</a>

<!-- Navbar fixed top area -->
<div class="ui fixed top menu">
	<div class="center menu">
		<a href="/home" class="{{(Request::is('home') ? 'active' : '')}} item">Home</a>
		<a href="/product" class="{{(Request::is('product') ? 'active' : '')}} item">Shop</a>
		<a href="/home" class="item logo" style="padding: 5px">
			@if (Request::is('product/*'))
				<img class="ui medium rounded image" src="../img/logo shit.jpg" style="width: 5em;">
			@else
				<img class="ui medium rounded image" src="img/logo shit.jpg" style="width: 5em;">
			@endif
		</a>
		<a href="" class="icon item logo" id="trigger"><i class="sidebar icon"></i></a>
		<a href="/blog" class="{{(Request::is('blog') ? 'active' : '')}} item">Our Team</a>
		<a href="/about" class="{{(Request::is('about') ? 'active' : '')}} item">About</a>
	</div>
</div>
<!-- Collapse Navbar Menu -->
<div class="ui fluid vertical menu collapse"></div>