@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<!-- Content area -->
<div class="ui container content">
	<div class="ui centered grid">
		<div class="ten wide column">
			<form class="ui form" method="POST">
				{{ csrf_field() }}
				<div class="ui attached top teal segment">
					<div class="field">
						<label>Username</label>
						<input placeholder="Username" type="text" name="username">
					</div>
					<div class="field">
						<label>Passwrod</label>
						<input placeholder="Password" type="password" name="password">
					</div>
					<div class="field">
						<label>Email</label>
						<input placeholder="Email" type="email" name="email">
					</div>
					<div class="ui stackable two column grid">
						<div class="ui checkbox column">
							<input type="checkbox" tabindex="0" class="hidden" name="remember">
							<label>Remember me</label>
						</div>
						<div class="ui toggle checkbox column">
							<input type="checkbox" tabindex="0" class="hidden" name="admin">
							<label>Administrator</label>
						</div>
					</div>
				</div>
				<div class="ui two bottom attached buttons">
				    <a class="ui button teal basic" href="/signup">Sign Up</a>
				    <button class="ui button teal" type="submit">Log In</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('js')
	<script src="js/login.js"></script>
@endsection