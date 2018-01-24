@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">

	<div class="ui column list">
		<div class="item">
		    <div class="right floated content">
		    	<div class="ui action input">
				  <input type="text" class="ui teal" placeholder="Search product...">
				  <button class="ui teal button">Search</button>
				</div>
		    </div>
			<div class="content">
		      	<div class="ui breadcrumb">
			  		<div class="active section">Cart</div>
				</div>
		    </div>
  		</div>
	</div>

	<div class="ui items segment" id="cartSegment">

	  <a class="ui orange ribbon label">Shopping Cart</a>

	  
	</div>

	<div class="ui clearing segment">
	  	<a class="ui orange ribbon label">Order Summary</a>

	  	<div class="ui divider"></div>

		<p class="price">Item Price: RM 4000</p>
	    <p class="price">Shipping Price:  RM 500</p>

		<div class="ui button">Grand Amount: 4500</div>


	    <div class="ui list right floated content">
		    
			<div class="ui buttons">
			  <a class="ui button" href="/product">Continue Shopping</a>
			  <div class="or"></div>
			  <a class="ui positive button" href="/checkout">Check Out</a>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
	<script src="js/cart.js"></script>
@endsection