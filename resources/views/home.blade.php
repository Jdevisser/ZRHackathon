@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading" onclick="hideDiv()">Map</div>

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

<!--            <div class="panel-body">
                    <iframe src="http://gadgets.buienradar.nl/gadget/forecastandstation/6310/" noresize scrolling=no hspace=0 vspace=0 frameborder=0 marginheight=0 marginwidth=0 width=300 height=190></iframe>
                    <iframe src="http://gadgets.buienradar.nl/gadget/zoommap/?lat=51.4425&lng=3.57361&overname=2&zoom=6&naam=Vlissingen&size=2&voor=1" scrolling=no width=256 height=256 frameborder=no></iframe>
                </div>
-->             <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Vandaag</td>
                                <td class="weather"></td>
								<td>2 mm</td>
                            <tr>
                            <tr>
                                <td>Morgen</td>
                                <td class="weather1"></td>
								<td>0.3 mm</td>
                            <tr>
                            <tr>
                                <td>Overmorgen</td>
                                <td class="weather2"></td>
								<td>0.5 mm</td>
                            <tr>
                            <tr>
                                <td>Over 3 dagen</td>
                                <td class="weather3"></td>
								<td>5.5 mm</td>
                            <tr>
                        </tbody>
                    </table>
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
        if (document.getElementById("default").src == "{{ asset('img/test.png') }}") 
        {
            document.getElementById("default").src = "{{ asset('img/test1.png') }}";
        }
        else 
        {
            document.getElementById("default").src = "{{ asset('img/test.png') }}";
        }

    bootbox.confirm({
        message: "Abnormal water level detected on Tank #12",
        buttons: {
            confirm: {
                label: 'Go to Tank #12',
                className: 'btn-default'
            },
            cancel: {
                label: 'Close',
                className: 'btn-default'
            }
        },
        callback: function (result) {
           if (result === true) {
                console.log("test")
                showDiv()
            }
            else {
                console.log("kill")
            }
        }
    });
});

listener.simple_combo("s", function() {

    console.log("You pressed s");
        if (document.getElementById("default").src == "{{ asset('img/test.png') }}") 
        {
            document.getElementById("default").src = "{{ asset('img/test1.png') }}";
        }
        else 
        {
            document.getElementById("default").src = "{{ asset('img/test.png') }}";
        }
});

listener.simple_combo("r", function() {

    console.log("You pressed r");
    $.ajax({
        type: "POST",
        url: "http://controlpanel.local/api/logging/1",
        data: {
            trigger: 0
        }
    });
});

function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}

function hideDiv() {
   document.getElementById('welcomeDiv').style.display = "none";
}

$(document).ready(function() {
    $.ajax({
        url: "http://api.openweathermap.org/data/2.5/weather?id=2745392&APPID=de28ec8fb6eae9c1e9868bff57e3f101"
    }).then(function(data) {
       $('.weather').append(data.weather[0].main);
    });
});

$(document).ready(function() {
    $.ajax({
        url: "http://api.openweathermap.org/data/2.5/forecast?id=2745392&APPID=de28ec8fb6eae9c1e9868bff57e3f101"
    }).then(function(data) {
       $('.weather1').append(data.list[0].weather[0].main);
       $('.weather2').append(data.list[8].weather[0].main);
       $('.weather3').append(data.list[16].weather[0].main);
    });
});

</script>

@endsection
