@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui three top attached steps">
	  <a class="completed step" href="/shipping">
	    <i class="truck icon"></i>
	    <div class="content">
	      <div class="title">Shipping</div>
	      <div class="description">Key in Shipping Information</div>
	    </div>
	  </a>
	  <a class="completed step" href="/confirm_order">
	    <i class="info icon"></i>
	    <div class="content">
	      <div class="title">Confirm Order</div>
	      <div class="description">Confirm Order</div>
	    </div>
	  </a>
	  <div class="active step">
	    <i class="payment icon"></i>
	    <div class="content">
	      <div class="title">Payment</div>
	      <div class="description">Make Payment</div>
	    </div>
	  </div>
	</div>


	<div class="ui attached segment">
		<div class="ui segment">
		  <div class="ui active dimmer">
		    <div class="ui text loader">Loading Payment Gateway</div>
		  </div>
			<p style="height: 100px">
				<h2>Payment Pending</h2>

			</p>
			<button class="fluid ui button">Continue</button>
		</div>
	</div>


</div>
@endsection

@section('js')
	<script src="js/shipping.js"></script>
@endsection