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
			  		<div class="active section">Products</div>
				</div>
		    </div>
  		</div>
	</div>

	<div class="ui four item stackable cards">
		@foreach ($products as $product)
			@include('product.productCard')
		@endforeach
	</div>
</div>
@endsection

@section('js')
	<script src="js/portfolio.js"></script>
@endsection