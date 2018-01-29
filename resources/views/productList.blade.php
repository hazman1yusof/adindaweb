@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui grid">
		<div class="four wide column">
	      	<div class="ui breadcrumb">
	      		@if(Request::get('productname')!="")
	      			<a class="section" href="/product">Products</a>
		      		<i class="right chevron icon divider"></i>
			  		<div class="active section">Search Keyword: {{Request::get('productname')}}</div>
	      		@else
					<div class="active section">Products</div>
	      		@endif
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

	<div class="ui basic center aligned segment">
		@if ($products->lastPage() > 1)
		    <div class="ui pagination menu">
		    	<a href="{{ $products->url(1) }}" class="{{ ($products->currentPage() == 1) ? ' disabled' : '' }} icon item">
		            <i class="angle double left icon"></i>
		        </a>
		        <a href="{{ $products->previousPageUrl() }}" class="{{ ($products->currentPage() == 1) ? ' disabled' : '' }} icon item">
		            <i class="angle left icon"></i>
		        </a>
		        @if ($products->currentPage() < $products->lastPage() && $products->currentPage() != 1)
			        @for ($i = $products->currentPage()-1; $i <= $products->currentPage()+2; $i++)
			            <a href="{{ $products->url($i) }}" class="{{ ($products->currentPage() == $i) ? ' active' : '' }} item">
			                {{ $i }}
			            </a>
			        @endfor
			    @elseif ($products->currentPage() >= $products->lastPage())
			    	@for ($i = $products->currentPage()-3; $i <= $products->currentPage(); $i++)
			            <a href="{{ $products->url($i) }}" class="{{ ($products->currentPage() == $i) ? ' active' : '' }} item">
			                {{ $i }}
			            </a>
			        @endfor
			    @else
			    	@for ($i = $products->currentPage(); $i <= $products->currentPage()+3; $i++)
			            <a href="{{ $products->url($i) }}" class="{{ ($products->currentPage() == $i) ? ' active' : '' }} item">
			                {{ $i }}
			            </a>
			        @endfor
			    @endif

		        <a href="{{ $products->nextPageUrl() }}" class="{{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }} icon item">
		            <i class="angle right icon"></i>
		        </a>
		        <a href="{{ $products->url($products->lastPage()) }}" class="{{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }} icon item">
		            <i class="angle double right icon"></i>
		        </a>
		    </div>
		@endif
	</div>
	
</div>
@endsection

@section('js')
	<script src="../js/product.js"></script>
@endsection