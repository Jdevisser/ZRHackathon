@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">Map</div>

                <div class="panel-body">
                    <!-- <iframe frameborder=0 style='width:100%;height:500px' src='//www.zeemaps.com/pub?group=2422652&x=3.728351&y=51.441767&z=1'> </iframe> -->
                    <img id="default" src="{{ asset('img/test.png') }}" onclick="showDiv()">
                </div>
            </div>
        </div>
        <div class="col-xs-6" id="welcomeDiv" style="display:none;">
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
            <div class="panel panel-default">
                <div class="panel-heading">Weather</div>

                <div class="panel-body">
                    <iframe src="https://gadgets.buienradar.nl/gadget/forecastandstation/6310/" noresize scrolling=no hspace=0 vspace=0 frameborder=0 marginheight=0 marginwidth=0 width=300 height=190></iframe>
                    <iframe src="https://gadgets.buienradar.nl/gadget/zoommap/?lat=51.4425&lng=3.57361&overname=2&zoom=6&naam=Vlissingen&size=2&voor=1" scrolling=no width=256 height=256 frameborder=no></iframe>
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

function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
</script>

@endsection
