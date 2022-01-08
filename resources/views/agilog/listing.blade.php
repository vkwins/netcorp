@extends('layouts.app')
    @section('content')
        <table class="table table-bordered"  >
            @if($agiLogs->count() == 0)
                <tr><th>No records found</th></tr>
            @else
                <tr><th>ID</th><th>Name</th><th>Year-Mon</th><th>Count</th></tr>
                @foreach($agiLogs as $agiLog)
                    <tr>
                        <td>{{$id}}</td>
                        <td>{{$vehicle->name}}</td>
                        <td>{{$agiLog->year_mon}}</td>
                        <td>{{ number_format($agiLog->count) }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    @endsection