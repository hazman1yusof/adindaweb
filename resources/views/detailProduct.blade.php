@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui column">
		
		<div class="ui breadcrumb">
	  		<a class="section" href="/product">Products</a>
	  		<i class="right chevron icon divider"></i>
	  		<div class="active section">Shoe 1</div>
		</div>
	</div>

	<div class="ui stackable two column grid">
	  <div class="six wide column">

		<div class="ui segment">
			<a class="ui orange ribbon label">Image</a>
	  		<div class="ui computer only grid" style="height: 350px;margin: 5px">
				<img id='mainimg' class="ui fluid image" src="../img/shoe.jpg">
			</div>

			<div class="ui divider"></div>

			<div class="ui centered stackable">
				<div class="ten wide column">
					<div class="owl-carousel" id="multiple-slider">
					    <div class="item"><a href="#"><img src="../img/shoe.jpg"></a></div>
					    <div class="item"><a href="#"><img src="../img/shoe2.jpg"></a></div>
					    <div class="item"><a href="#"><img src="../img/shoe3.jpg"></a></div>
					    <div class="item"><a href="#"><img src="../img/shoe4.jpg"></a></div>
					</div>
				</div>
			</div>
		</div>
	  </div>

		<div class="ui stackable ten wide column">
			
		  <div class="sixteen wide column">

			<div class="ui top attached segment">
				<a class="ui red ribbon label">Product Overview</a>
				<h2 class="ui teal right floated header">Product Name</h2>
				<div class="ui clearing divider"></div>
				<p>
					<b>Product Description: </b></p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet elementum dui. Sed egestas mauris eu quam egestas facilisis. Nam ex tortor, auctor sed dictum nec, aliquam sit amet lectus. Curabitur cursus metus consectetur risus maximus, at efficitur augue fermentum. Donec diam nunc, efficitur nec congue vitae, aliquam faucibus libero. Pellentesque ac elit eu est consectetur ultrices vel in erat. Integer imperdiet magna non ipsum iaculis, auctor scel
				</p>
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Sed sit amet elementum dui. Sed egestas mauris eu quam egestas facilisis</li>
					<li>Nam ex tortor, auctor sed dictum nec, aliquam sit amet lectus. Curabitur cursus metus consectetur risus maximus</li>
					<li>Pellentesque ac elit eu est consectetur ultrices vel in erat. Integer imperdiet magna non ipsum iaculis</li>
				</ul>

			</div>
			<div class="ui bottom attached header">
				<div class="ui tag labels">
				  <a class="ui label">
				    Shoe Category
				  </a>
				  <a class="ui label">
				    Discount
				  </a>
				  <a class="ui label">
				    Hot
				  </a>
				  <a class="ui label">
				    Trending
				  </a>
				</div>
			</div>

		  </div>

		  <div class="ui segment">
				<a class="ui red ribbon label">Buy Product</a>
				<div class="ui right floated header mini star rating" data-rating="3"></div>
				<div class="ui clearing divider"></div>
				<p>
					<b>Price: </b>RM 400.00<br>
					<b>Shipping: </b>Free<br>
				</p>
				<p>
					<div class="ui right labeled input">
					  <div class="ui blue label"><a><i class="plus icon"></i></a></div>
					  <input type="text" placeholder="Amount" id="amount" value="1">
					  <div class="ui blue label"><a><i class="minus icon"></i></a></div>
					</div>
				</p>
				<div class="ui item">
					<button class="fluid ui green button">Add to Cart</button>
				</div>
			</div>
			
		  </div>

		</div>
	</div>
</div>

@endsection

@section('js')
	<script src="../js/detailProduct.js"></script>
@endsection