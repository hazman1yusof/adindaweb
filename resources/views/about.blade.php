@extends('layouts.mainlayout')

@section('content')
<!-- Content area -->
<div class="ui container content">
	<div class="ui stackable doubling grid">
		<!-- Middle Content -->
		<div class="sixteen wide column">
			<div class="ui horizontal divider"><h3>ABOUT</h3></div>
			<div align="center">
				<p>Kami menjual skincare 5 IN 1 yg dihasilkan drp bahan2semulajadi/alami.skincare kami adalah 100%selamat tanpa menggelupasan/kesan merah pd muka/pedih.set trial utk pengguna yg baru ingin mencuba produk kami.</p>
				<p>Kami juga menjual LULUR ORGANIK PUTRI yg dihasilkan 100% drp bahan2 organik</p>
				<p>Menjual skincare/lulur/scrub/jagaan wanita yg berasaskan bahan2 yg selamat,tiada kesan sampingan kpd pengguna</p>
			</div>
			<br>
			<div class="ui horizontal divider"><h3>CONTACT INFO</h3></div>
			<div align="center">
				<div class="ui grid stackable">
					<div class="ui column six wide">
						<div class="ui segment">

							<p><i class="call icon"></i> Call 011-1977 0783</p>
							<p><i class="mail icon"></i> penmerahpenbiru@gmail.com</p>
							<p><i class="map icon"></i></p>
							Adinda Beauty<br>
							No. 62-G, Jalan Nelayan B 19/B, Seksyen 19, Selangor<br>
							Seksyen 19<br>
							40200 Shah Alam<br>
							Selangor, Malaysia<br>
						</div>
					</div>
					<div class="ui column ten wide">
						<div class="ui column six wide">
							<div class="ui segment" id="map" style="height: 500px;">
								
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<br>
			
		</div>
	</div>
</div>
@endsection

@section('js')
	<script src="js/about.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJc51mvQYeix8FZ1LsQCPWcwW091jH05o"></script>
    <script>
      // In the following example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
      var labels = 'AdindaBeauty';
      var labelIndex = 0;

      function initialize() {
        var adinda = {lat: 3.049549, lng: 101.533839};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: adinda
        });

        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
          addMarker(event.latLng, map);
        });

        // Add a marker at the center of the map.
        addMarker(adinda, map);
      }

      // Adds a marker to the map.
      function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection