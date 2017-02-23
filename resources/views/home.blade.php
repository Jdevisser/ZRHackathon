@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">Map</div>

                <div class="panel-body">
                    <img id="map" src="img/map.png">
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">Video</div>

                <div class="panel-body">
                    <iframe src="http://192.168.1.101:8080/browserfs.html"></iframe>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Data</div>

                <div class="panel-body">
                    ...
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
