<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }
    #map{
        height: 500px;
        width: 500px;
    }
</style>

<body>
    <div id="map"></div>



<script>

    function initMap() {
        var location = {
            lat: -36.848461, 
            lng: 174.763336
        };

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: location
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }



</script>
<script async defer 
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm8E0d8T8Cy6kj43CHRFMN3E9jFn7jejM&callback=initMap" 
type="text/javascript">
</script>



</body>
</html>