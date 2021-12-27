@extends('layouts.app')
    @section('content')
        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif

        <form method="post" action="vehicle-store" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" required   placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">AgiDrive</label>
                <select class="custom-select" required name="is_agidrive" >
                    <option value="">Choose...</option>
                    <option value="on">On</option>
                    <option value="off">Off</option>
                </select>                        
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>                
    @endsection