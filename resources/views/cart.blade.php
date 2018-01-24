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

	<div class="ui items segment">

	  <a class="ui orange ribbon label">Shopping Cart</a>

	  <div class="item">
	    <div class="ui small bordered image">
	      <img src="img/shoe.jpg" >
	    </div>
	    <div class="content">
	      <div class="header">Product Name</div>
	      <div class="meta">
	        <span class="price">Item Price RM 1200</span>
	      </div>
	      <div class="description">
	        <p>
	        	<div class="ui right labeled mini input">
				  <div class="ui blue label"><a><i class="plus icon"></i></a></div>
				  <input type="text" placeholder="Amount" id="amount" value="1">
				  <div class="ui blue label"><a><i class="minus icon"></i></a></div>
				</div>

		        <div class="ui right floated icon button red">
		          Remove <i class="remove icon"></i>
		        </div>
	        </p>
		   </div>
	      <div class="extra">
	        <span class="ui label right floated">Price RM 1600</span>
	      </div>
	    </div>
	  </div>

	  <div class="ui divider"></div>

	  <div class="item">
	    <div class="ui small image">
	      <img src="img/shoe2.jpg">
	    </div>
	    <div class="content">
	      <div class="header">Product Name 1</div>
	      <div class="meta">
	        <span class="price">Item Price RM 1000</span>
	      </div>
	      <div class="description">
	        <p>
	        	<div class="ui right labeled mini input">
				  <div class="ui blue label"><a><i class="plus icon"></i></a></div>
				  <input type="text" placeholder="Amount" id="amount" value="1">
				  <div class="ui blue label"><a><i class="minus icon"></i></a></div>
				</div>
				
		        <div class="ui right floated icon button red">
		          Remove <i class="remove icon"></i>
		        </div>
	        </p>
	      </div>
	      <div class="extra">
	        <span class="ui label right floated">Price RM 1600</span>
	      </div>
	    </div>
	  </div>

	  <div class="ui divider"></div>

	  <div class="item">
	    <div class="ui small image">
	      <img src="img/shoe3.jpg">
	    </div>
	    <div class="content">
	      <div class="header">Product Name 2</div>
	      <div class="meta">
	        <span class="price">Item Price RM 1600</span>
	      </div>
	      <div class="description">
	        <p>
	        	<div class="ui right labeled mini input">
				  <div class="ui blue label"><a><i class="plus icon"></i></a></div>
				  <input type="text" placeholder="Amount" id="amount" value="1">
				  <div class="ui blue label"><a><i class="minus icon"></i></a></div>
				</div>
				
		        <div class="ui right floated icon button red">
		          Remove <i class="remove icon"></i>
		        </div>
	        </p>
	      </div>
	      <div class="extra">
	        <span class="ui label right floated">Price RM 1600</span>
	      </div>
	    </div>
	  </div>
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