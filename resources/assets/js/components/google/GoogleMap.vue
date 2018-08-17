<template>
	<div id="map"></div>
</template>

<script>
    export default {
        mounted() {
            console.log('Google Map mounted.');
            let map = new google.maps.Map(document.getElementById('map'), {
					          center: {lat: -34.397, lng: 150.644},
					          zoom: 8
					        });
        }
    }
</script>

<style type="text/css">
	#map {
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
	}
</style>