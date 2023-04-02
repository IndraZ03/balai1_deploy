<?php

$con = mysqli_connect('localhost:3307', 'root', '', 'balai1');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sqls = mysqli_query($con, "SELECT * FROM `locations`");
/*  while ($row = mysqli_fetch_array($sqls)) {

    $det = $row['Details'];
    $lat = $row['Latitude'];
    $long=$row['Longitude'];

}
$i=0;*/
$data = array();
while ($roww = mysqli_fetch_array($sqls)) {
  $data[] = array("name" => $roww["name"], "lat" => $roww["lat"], "lon" => $roww["lng"], "Details" => $roww['details']);
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
  <script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <title>Maps</title>
  <style type="text/css">
    #map {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      width: 100%;
    }
  </style>
</head>

<body>
  <div id='map'></div>
  <script type="text/javascript">
    var map = L.map('map').setView([-1.406, 101.843], 6);
    L.tileLayer('https://api.maptiler.com/maps/basic/256/{z}/{x}/{y}.png?key=SE5u9d6rU1R3LPfoh9di', {
      attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    }).addTo(map);
    //var marker = L.marker([14.0940, 120.6890]).addTo(map);
    var city = L.markerClusterGroup();
    // var Points = $.getJSON("get_location.php", function(data) {     
    var data = <?php echo json_encode($data); ?>;
    for (var i = 0; i < data.length; i++) {
      var new_location = new L.LatLng(data[i].lat, data[i].lon);
      var place = data[i].Details;
      var nama = data[i].name;
      var marker = new L.Marker(new_location, {
        title: place
      });
      var message = '<b>' + nama + '</b><br>' + 'Latitude:' + data[i].lat + '<br>Longitude:' + data[i].lon + '<br>Keterangan: ' + place;
      marker.bindPopup(message);
      city.addLayer(marker);
      // if (data[i].lat < SWlat) {SWlat = data[i].lat}
      // if (data[i].lng < SWlng) {SWlng = data[i].lng}
      // if (data[i].lat > NElat) {NElat = data[i].lat}
      // if (data[i].lng > NElng) {NElng = data[i].lng}
    }
    // });
    // Points.done(function() {
    // locSW = new L.LatLng(SWlat, SWlng);
    // locNE = new L.LatLng(NElat, NElng);
    // mapBounds = L.latLngBounds(locSW, locNE);
    // map.fitBounds(mapBounds);
    // });
    map.addLayer(city);
  </script>
</body>

</html>