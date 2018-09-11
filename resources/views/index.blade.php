<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>

<head>
    <title> Weather App </title>
    <meta charset="utf-8">
    <!--<link rel="stylesheet" href="/stylesheets/main.css" charset="utf-8">-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.teal-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

<div id="app-container" class="mdl-shadow--6dp">



    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect" style="width: 500px; margin: 0 auto">
        <div class="mdl-tabs__tab-bar " id="tab-header">
            <a href="#info-panel" class="mdl-tabs__tab l is-active">Current Weather Information In Lekki Lagos Nigeria </a>
        </div>

        <div class="mdl-tabs__panel is-active" id="info-panel">
            <!--panel one content-->
            <div id="" class="info-card">
                <div id="box-wind-spd" class="box-left box-info">
                    <h3></h3>
                </div>
                <div id="box-wind-text" class="box-middle box-info">
                    <p>Max Temperature : {{ $weather->temp_max }}</p>
                </div>
                <div id="box-wind-icon" class="box-right box-info">
                    <img id="tSpinner" src="http://terrellvest.com/wp-content/uploads/2015/08/Tourbine-Spinner.png" alt="" />
                    <div id="pole"></div>
                </div>
            </div>
            <div id="" class="info-card">
                <div id="box-wind-spd" class="box-left box-info">
                    <h3></h3>
                </div>
                <div id="box-wind-text" class="box-middle box-info">
                    <p>Min Temperature : {{ $weather->temp_min }}</p>
                </div>
                <div id="box-wind-icon" class="box-right box-info">
                    <img id="tSpinner" src="http://terrellvest.com/wp-content/uploads/2015/08/Tourbine-Spinner.png" alt="" />
                    <div id="pole"></div>
                </div>
            </div>
            <div id="" class="info-card">
                <div id="box-wind-spd" class="box-left box-info">
                    <h3></h3>
                </div>
                <div id="box-wind-text" class="box-middle box-info">
                    <p>Wind Description : {{ $weather->description }}</p>
                </div>
                <div id="box-wind-icon" class="box-right box-info">
                    <img id="tSpinner" src="http://terrellvest.com/wp-content/uploads/2015/08/Tourbine-Spinner.png" alt="" />
                    <div id="pole"></div>
                </div>
            </div>
            <div id="" class="info-card">
                <div id="box-wind-spd" class="box-left box-info">
                    <h3></h3>
                </div>
                <div id="box-wind-text" class="box-middle box-info">
                    <p>Wind Speed : {{ $weather->wind_speed }}</p>
                </div>
                <div id="box-wind-icon" class="box-right box-info">
                    <img id="tSpinner" src="http://terrellvest.com/wp-content/uploads/2015/08/Tourbine-Spinner.png" alt="" />
                    <div id="pole"></div>
                </div>
            </div>

            <div id="" class="info-card">
                <div id="box-humidity-percent" class="box-left box-info">
                    <h3></h3>
                </div>
                <div id="box-humidity-text" class="box-middle box-info">
                    <p>Humidity: {{ $weather->humidity }}</p>
                </div>
                <div id="box-wind-icon" class="box-right box-info">
                    <img src="http://terrellvest.com/wp-content/uploads/2015/08/humidity.png" id="humidity" alt="" />
                </div>
            </div>
            {{--<div id="" class="info-card">--}}
                {{--<div id="box-sunrise-time" class="box-left box-info time">--}}
                    {{--<h3></h3>--}}
                {{--</div>--}}
                {{--<div id="box-sunrise-text" class="box-middle box-info">--}}
                    {{--<p>Sunrise</p>--}}
                {{--</div>--}}
                {{--<div id="box-sunrise-icon" class="box-right box-info">--}}
                    {{--<img id="sunrise" src="http://terrellvest.com/wp-content/uploads/2015/08/sunrise.png" alt="" />--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div id="" class="info-card">--}}
                {{--<div id="box-sunset-time" class="box-left box-info time">--}}
                    {{--<h3></h3>--}}
                {{--</div>--}}
                {{--<div id="box-sunset-text" class="box-middle box-info">--}}
                    {{--<p>Sunset</p>--}}
                {{--</div>--}}
                {{--<div id="box-wind-icon" class="box-right box-info">--}}
                    {{--<img src="http://terrellvest.com/wp-content/uploads/2015/08/sunset.png" id="sunset" alt="" />--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </div>

</div>
</body>

</html>

