@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui grid">
		<div class="four wide column">
	      	<div class="ui breadcrumb">
	      		<a class="section" href="/product">Products</a>
	      		<i class="right chevron icon divider"></i>
		  		<div class="active section">{{$product->itemname}}</div>
			</div>
	    </div>
	    <div class="twelve wide column">
	    	@include('layouts.search_breadcrumb')
	    </div>
	</div>


	<div class="ui stackable two column grid">
		  <div class="six wide column">

			<div class="ui segment">
				<a class="ui red ribbon label">Product Image</a>
		  		<div class="ui computer only grid" style="height: 350px;margin: 5px">
					<img id='mainimg' class="ui fluid image" src="../img/{{$product->images()->first()->image_url}}.jpg">
				</div>

				<div class="ui divider"></div>

				<div class="ui centered stackable">
					<div class="ten wide column">
						<div class="owl-carousel" id="multiple-slider">
							@foreach ($product->images()->get() as $image)
						    	<div class="item"><a href="#"><img src="../img/{{$image->image_url}}.jpg"></a></div>
							@endforeach
						</div>
					</div>
				</div>
			</div>  
		</div>

		<div class="ui stackable ten wide column">
			
		  <div class="row">

			<div class="ui top attached segment">
				<a class="ui red ribbon label">Product Overview</a>
				<h2 class="ui teal right floated header">{{$product->itemname}}</h2>
				<div class="ui clearing divider"></div>
				<p>
					<b>Product Description: </b>
				</p>
				<p>
					{{$product->description}}
				</p>

			</div>
			<div class="ui bottom attached header">
				<div class="ui tag labels">
				  <a class="ui label">
				    {{$product->category()->description}}
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

		  <div class="ui top attached segment">
				<a class="ui red ribbon label">Buy Product</a>
				<div class="ui right floated header mini star rating" data-rating="3"></div>
				<div class="ui clearing divider"></div>
				<p>
					<b>Price: </b>RM {{$product->currprice}}<br>
					<b>Shipping: </b>Free<br>
					<b>Stock: </b><span id='qtyonhand'>{{$product->qtyonhand}}</span><br>
				</p>
				<p>
					<div class="ui right labeled input">
					  <div class="ui teal label"><a><i class="minus icon"></i></a></div>
					  <input type="text" placeholder="Amount" id="item_quan" value="1" class="text_quan">
					  <div class="ui teal label"><a><i class="plus icon"></i></a></div>
					</div>
				</p>
			</div>
			<div class="ui teal bottom attached button" id="addToCart" data-item_id='{{$product->idno}}' >Add to Cart</div>
			
		  </div>

		</div>
	</div>
</div>

@endsection

@section('js')
	<script src="../js/detailProduct.js"></script>
@endsection