@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">Map</div>

                <div class="panel-body">
                    <iframe frameborder=0 style='width:100%;height:500px' src='//www.zeemaps.com/pub?group=2422652&x=3.728351&y=51.441767&z=1'> </iframe>
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

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="{{ asset('js/bootbox.js') }}"></script>
<script src="{{ asset('js/keypress.js') }}"></script>

<script>
var listener = new window.keypress.Listener();

listener.simple_combo("a", function() {
    console.log("You pressed a");
    bootbox.alert("Abnormal water level detected on Tank #12");
});
</script>

@endsection
