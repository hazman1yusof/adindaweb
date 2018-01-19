@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui column">
		<div class="item">
			<div class="ui breadcrumb">
		  		<a class="section" href="/product">Products</a>
			</div>
		</div>
		<div class="item">
			<div class="ui breadcrumb">
		  		<a class="section" href="/product">Products</a>
			</div>
		</div>
	</div>

	<div class="ui four stackable cards">

	  <div class="ui raised link card">
	    <div class="image">
	      <div class="ui blurring inverted dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui teal button">Add Friend</div>
	          </div>
	        </div>
	      </div>
	      <img src="img/shoe.jpg">
	    </div>
	    <div class="content">
	      <div class="header">
	      	<a class="group" href="product/1">Product Name</a>
	      </div>
	      <div class="meta">
	        Category
	      </div>
	      <div class="description">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
	    </div>
	    <div class="extra content">
	      <div class="ui star rating" data-rating="3"></div>
	      <span class="right floated">
		      <i class="inbox icon"></i>
		      <a>Stock :</a> 17
		  </span>
	    </div>
	  </div>

	  <div class="ui raised link card">
	    <div class="image">
	      <div class="ui blurring inverted dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui teal button">Add Friend</div>
	          </div>
	        </div>
	      </div>
	      <img src="img/shoe2.jpg">
	    </div>
	    <div class="content">
	      <div class="header">
	      	<a class="group" href="product/2">Product Name</a>
	      </div>
	      <div class="meta">
	        Category
	      </div>
	      <div class="description">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
	    </div>
	    <div class="extra content">
	      <div class="ui star rating" data-rating="3"></div>
	      <span class="right floated">
		      <i class="inbox icon"></i>
		      <a>Stock :</a> 17
		  </span>
	    </div>
	  </div>

	  <div class="ui raised link card">
	    <div class="image">
	      <div class="ui blurring inverted dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui teal button">Add Friend</div>
	          </div>
	        </div>
	      </div>
	      <img src="img/shoe3.jpg">
	    </div>
	    <div class="content">
	      <div class="header">
	      	<a class="group" href="product/3">Product Name</a>
	      </div>
	      <div class="meta">
	        Category
	      </div>
	      <div class="description">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
	    </div>
	    <div class="extra content">
	      <div class="ui star rating" data-rating="3"></div>
	      <span class="right floated">
		      <i class="inbox icon"></i>
		      <a>Stock :</a> 17
		  </span>
	    </div>
	  </div>

	  <div class="ui raised link card">
	    <div class="image">
	      <div class="ui blurring inverted dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui teal button">Add Friend</div>
	          </div>
	        </div>
	      </div>
	      <img src="img/shoe3.jpg">
	    </div>
	    <div class="content">
	      <div class="header">
	      	<a class="group" href="product/4">Product Name</a>
	      </div>
	      <div class="meta">
	        Category
	      </div>
	      <div class="description">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
	    </div>
	    <div class="extra content">
	      <div class="ui star rating" data-rating="3"></div>
	      <span class="right floated">
		      <i class="inbox icon"></i>
		      <a>Stock :</a> 17
		  </span>
	    </div>
	  </div>

	  <div class="ui raised link card">
	    <div class="image">
	      <div class="ui blurring inverted dimmer">
	        <div class="content">
	          <div class="center">
	            <div class="ui teal button">Add Friend</div>
	          </div>
	        </div>
	      </div>
	      <img src="img/shoe.jpg">
	    </div>
	    <div class="content">
	      <div class="header">
	      	<a class="group">Product Name</a>
	      </div>
	      <div class="meta">
	        Category
	      </div>
	      <div class="description">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
	    </div>
	    <div class="extra content">
	      <div class="ui star rating" data-rating="3"></div>
	      <span class="right floated">
		      <i class="inbox icon"></i>
		      <a>Stock :</a> 17
		  </span>
	    </div>
	  </div>
	</div>
</div>
@endsection

@section('js')
	<script src="js/portfolio.js"></script>
@endsection