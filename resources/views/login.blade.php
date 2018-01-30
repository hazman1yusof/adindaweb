@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<!-- Content area -->
<div class="ui container content">
	<div class="ui centered grid">
		<div class="ten wide column">
			<div class="ui teal segment">
				<form class="ui form">
					<div class="field">
						<label>Username</label>
						<input placeholder="Username" type="text">
					</div>
					<div class="field">
						<label>Passwrod</label>
						<input placeholder="Password" type="password">
					</div>
					<div class="ui stackable two column grid">
						<div class="ui checkbox column">
							<input type="checkbox" tabindex="0" class="hidden">
							<label>Remember me</label>
						</div>
						<div class="ui toggle checkbox column">
							<input type="checkbox" tabindex="0" class="hidden">
							<label>Administrator</label>
						</div>
					</div>
					<div class="row" style="padding: 10px; height: 40px">
						<div class="ui right floated buttons">
							<button class="ui teal basic button">Sign Up</button>
								<div class="or"></div>
							<button class="ui teal button">Log In<i class="right chevron icon"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
	<script src="js/login.js"></script>
@endsection