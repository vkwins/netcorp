@extends('layouts.app')
    @section('content')
        <table class="table table-bordered"  >
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
        </table>
    @endsection