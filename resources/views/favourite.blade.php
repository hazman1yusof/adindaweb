@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui grid">
		<div class="four wide column">
	      	<div class="ui breadcrumb">
				<div class="active section">Favourite</div>
			</div>
	    </div>
	    <div class="twelve wide column">
	    	@include('layouts.search_breadcrumb')
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
	<script src="../js/favourite.js"></script>
@endsection