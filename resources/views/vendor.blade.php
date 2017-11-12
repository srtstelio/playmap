<style>
    #map-canvas{
        width: 400px;
        height: 400px;
    }
</style>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtng5Ove_4jDibP7QGNHOXze482V8_Yjg&libraries=geometry,places" type="text/javascript"></script>

<div class='container'>
	
		<h1> Add Vendor Location </h1>
		<div id='map-canvas'></div>
</div>

<script>
    
    var lat=27.72;
    var long: 85.36;
    
    var map = new google.maps.Map(document.getElementById('map.canvas'),{
        center:{
            lat: 27.72,
            long: 85.36
        },
        zoom:15
    } );
    var marker = new google.maps.Marker({
        position: {
             lat: 27.72,
            long: 85.36
        },
        map: map
  
    });
    

</script>

