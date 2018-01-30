<div id="top"></div>
<!-- Progress bar area -->
<div class="progress bar"></div>
<a href="#top" class="ui circular icon button" id="toTop" data-slide="slide">
	<i class="angle up icon"></i>
</a>

<style type="text/css">
	
	#cart{
		color:red;
		position:absolute;
		right:20px;
		top:20px;
	}
</style>

<!-- Navbar fixed top area -->
<div class="ui top fixed menu">
	<div class="center menu">
		<a href="/home" class="item {{(Request::is('home') ? 'active' : '')}} item">Home</a>
		<a href="/product" class="item @if(Request::is('product') || Request::is('product/*') || Request::is('cart') || Request::is('shipping') || Request::is('confirm_order') || Request::is('payment')) {{'active'}} @endif item">Shop</a>
		<a href="/home" class="item logo" style="padding: 5px">
			@if (Request::is('product/*'))
				<img class="ui medium rounded image" src="../img/logo shit.jpg" style="width: 5em;">
			@else
				<img class="ui medium rounded image" src="img/logo shit.jpg" style="width: 5em;">
			@endif
		</a>
		<a href="" class="icon item logo" id="trigger"><i class="sidebar icon"></i></a>
		<a href="/login" class="item {{(Request::is('login') ? 'active' : '')}} item">Log In</a>
		<a href="/about" class="item {{(Request::is('about') ? 'active' : '')}} item">About</a>
	</div>
	<span id="cart">
		<a class="ui icon button teal" href="/cart">
			<i class="big cart icon"></i>
			<div class="floating circular ui red label" id="cart_length">0</div>
		</a>
	</span>
</div>
<!-- Collapse Navbar Menu -->
<div class="ui fluid vertical menu collapse"></div>