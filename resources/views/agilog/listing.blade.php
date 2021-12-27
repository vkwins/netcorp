@extends('layouts.app')
    @section('content')
        <table class="table table-bordered"  >
            <tr><th>ID</th><th>Name</th><th>Year-Mon</th><th>Count</th></tr>
            @foreach($agiLogs as $agiLog)
                <tr>
                    <td>{{$agiLog->id}}</td>
                    <td>{{$agiLog->name}}</td>
                    <td>{{ \Carbon\Carbon::parse($agiLog->year_mon)->format('Y-m')}}</td>
                    <td>{{ number_format($agiLog->count) }}</td>
                </tr>
            @endforeach
        </table>
    @endsection