@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui stackable doubling grid">
		<!-- Middle Content -->
		<div class="sixteen wide column">
			<div class="ui horizontal divider"><h2>About</h2></div>
			<div align="center">
				<div class="ui heart rating" data-rating="1" data-max-rating="3"></div>
				<p><b>Moderns Template</b> adalah free template siap pakai yang saya buat untuk di pakai, di modifikasi, dan di share kepada siapapun tetapi dengan tetap menyertakan alamat dan pembuat asli dari template ini yaitu saya sendiri di dalam file index, license, atau lainnya. Semoga template ini dapat berguna untuk anda sekalian. Terima kasih karena telah menggunakan template ini.</p>
				<blockquote><h3>"Berkarya, Bersama, Berjaya"</h3></blockquote>
			</div>
			<br>
			<div class="ui horizontal divider">Sample History</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus ex error natus, harum ipsum nam id cumque ut quasi esse, sed, suscipit accusamus rem! Doloremque tenetur fugit, non nisi harum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium quas, explicabo quasi itaque a odio beatae tenetur veritatis consectetur. Quos vero libero beatae ea. Repellat odio illum laboriosam consectetur aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis dolores, similique quis assumenda, et mollitia nobis repellat? Ad eaque sapiente eos reprehenderit placeat quaerat, consequuntur, atque omnis consequatur ullam quod?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus ex error natus, harum ipsum nam id cumque ut quasi esse, sed, suscipit accusamus rem! Doloremque tenetur fugit, non nisi harum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium quas, explicabo quasi itaque a odio beatae tenetur veritatis consectetur. Quos vero libero beatae ea. Repellat odio illum laboriosam consectetur aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis dolores, similique quis assumenda, et mollitia nobis repellat? Ad eaque sapiente eos reprehenderit placeat quaerat, consequuntur, atque omnis consequatur ullam quod?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus ex error natus, harum ipsum nam id cumque ut quasi esse, sed, suscipit accusamus rem! Doloremque tenetur fugit, non nisi harum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium quas, explicabo quasi itaque a odio beatae tenetur veritatis consectetur. Quos vero libero beatae ea. Repellat odio illum laboriosam consectetur aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis dolores, similique quis assumenda, et mollitia nobis repellat? Ad eaque sapiente eos reprehenderit placeat quaerat, consequuntur, atque omnis consequatur ullam quod?</p>
			<br>
			<div class="ui horizontal divider">Our Client</div>
			<!-- Slider Container -->
			<div class="ui container">
				<div class="ui centered stackable doubling grid">
					<div class="eight wide column">
						<div class="owl-carousel" id="multiple-slider">
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						    <div class="item"><img src="assets/img/400x400.png"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
	<script src="js/about.js"></script>
@endsection