@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create route </h1>

    <form class="form-horizontal" action="{{ route('routes.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Hostname:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="hostname" id="hostname" placeholder="Enter hostname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Loop back:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="loopback" id="loopback"
                    placeholder="Enter loop back (IP Address)">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Mac Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="mac_address" id="mac_address"
                    placeholder="Enter mac address">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection