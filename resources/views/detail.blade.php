@extends('template')

@section('main')
<br>
<br>
<br>
<br>
<br>
<br>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<h1>{{$scan->commentaire}}<h1>
<div id="map"></div>
<style>
  #map {
    width: 100%;
    height: 400px;
    background-color: #CCC;
  }
</style>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng({{$scan->lat}}, {{(float) $scan->lng}}),
          zoom: 25,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var marker = new google.maps.Marker({
		    position: new google.maps.LatLng({{$scan->lat}}, {{(float) $scan->lng}}),
		    map: map,
		    title: 'Hello World!'
		  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop