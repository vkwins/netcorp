@extends('layouts.app')
    @section('content')
        <table class="table table-bordered"  >
            <tr><th>ID</th><th>Name</th><th>AgiDrive</th><th></th></tr>
            @foreach($vechicles as $vechicle)
                <tr>
                    <td>{{$vechicle->id}}</td>
                    <td>{{$vechicle->name}}</td>
                    <td>{{$vechicle->is_agidrive}}</td>
                    <td>
                        @if ($vechicle->is_agidrive == 'on')
                            <a href="/log-count/{{$vechicle->id}}" class="btn btn-secondary">Log Count</a>
                            <a href="/last-info/{{$vechicle->id}}" class="btn btn-secondary">Last Info</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection