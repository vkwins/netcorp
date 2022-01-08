@extends('layouts.app')
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_KEY') }}"></script>
<script>
    function initMap() {
    var coordinates = {
        lat: {{ $lastInfo->lat }},
        lng: {{ $lastInfo->lng }}
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: coordinates,
        scrollwheel: false
    });
    var measle = new google.maps.Marker({
        position: coordinates,
        map: map,
        icon: {
        url: "https://maps.gstatic.com/intl/en_us/mapfiles/markers2/measle.png",
        size: new google.maps.Size(7, 7),
        anchor: new google.maps.Point(3.8, 3.8)
        }
    });
    var marker = new google.maps.Marker({
        position: coordinates,
        map: map,
        icon: {
        url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
        labelOrigin: new google.maps.Point(25, 45),
        size: new google.maps.Size(32, 32),
        anchor: new google.maps.Point(16, 32)
        },
        label: {
        text: "{{ $lastInfo->location }}",
        color: "#C70E20",
        fontWeight: "bold"
        }
    });
    }
    google.maps.event.addDomListener(window, "load", initMap);
</script>
<style>
    #map {
        height: 500px;
        width: 100%;
        margin: 0px;
        padding: 0px
    }
</style>
    @section('content')
        <table class="table table-bordered"  >
            @if(empty($lastInfo))
                <tr><th>No records found</th></tr>
            @else
                <tr><th>ID</th><th>Name</th><th>Local Time</th><th>Latitude</th><th>Longitude</th><th>Location</th><th>Speed</th><th>Direction</th></tr>
                <tr>
                    <td>{{$lastInfo->id}}</td>
                    <td>{{$lastInfo->name}}</td>
                    <td>{{ $lastInfo->local_time }}</td>
                    <td>{{ $lastInfo->lat }}</td>
                    <td>{{ $lastInfo->lng }}</td>
                    <td>{{ $lastInfo->location }}</td>
                    <td>{{ $lastInfo->speed }}</td>
                    <td>{{ $lastInfo->direction }}</td>
                </tr>
                <tr>
                    <td colspan="8"><div id="map"></div></td>
                </tr>
            @endif
        </table>
    @endsection