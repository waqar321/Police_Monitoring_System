<style type="text/css">
	#map-convas{
		width: 350px;
		height: 250px;
	}

</style>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6klCFUQlRwVJ-nyXxd6worfiB12Q&libraries=places"></script>

<div class="container">
	<div class="col-sm-4">
			<h1> 	Add Vendor, Location </h1>

			<form method="post">
			<div class="form=group">
				<label for=""> Title</label>
				<input type="text" class="form-control input-sm" name="title">
			</div>
			<div class="form=group">
				<label for=""> Map</label>
				<input type="text" id="searchmap">
				<div id="map-canvas"> </div>
			</div>
			<div class="form=group">
				<label for="">Lat</label>
				<input type="text" class="form-control input-sm" name="lat" id="lat">
			</div>
			<div class="form=group">
				<label for="">lng</label>
				<input type="text" class="form-control input-sm" name="lng" id="lng">
			</div>

			<button class="btn btn-sm btn-danger"> Save </button>

		</form>

	</div>
</div>

<script>
		var map= new google.maps.Marker(document.getElementById('map-convas'), {
			center:{
				lat: 27.72,
				lng: 85.36
			}
			zoom:15 
		});
</script>