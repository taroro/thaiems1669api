<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>1669 Navigation - Accident Detail</title>

    <!-- Fonts -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{
            background-repeat: no-repeat;
            background: rgb(185,210,224); /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%, rgba(187,214,228,1) 0%, rgba(186,211,225,1) 15%, rgba(186,211,225,1) 38%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 82%, rgba(158,191,208,1) 100%); /* FF3.6-15 */
            background: -webkit-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%); /* Chrome10-25,Safari5.1-6 */
            background: radial-gradient(ellipse at center,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b9d2e0', endColorstr='#9ebfd0',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }
        .google-map{border:3px solid #F4F4F4;}
    </style>

    <script language="JavaScript">
        function initMap() {
        }
    </script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top clearfix">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">1669 NAVI</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">หน้าแรก <span class="sr-only">(current)</span></a></li>
                <li><a href="#">เหตุด่วน/อุบัติเหตุ</a></li>
                <li><a href="#">รถฉุกเฉิน/กู้ภัย</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ค้นหาเหตุด่วน/อุบัติเหตุ">
                </div>
                <button type="submit" class="btn btn-default">ค้นหา</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ข้อมูลผู้ใช้ <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="login">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid clearfix">
    <div class="content-main clearfix" style="margin: 70px 0 40px">
        <div class="row clearfix">
            <div class="col-md-6">
                <div class="row clearfix">
                    <div class="container-fluid">
                        <div style="height:calc(100vh - 156px);" class="google-map" id="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="row clearfix" style="height:calc(100vh - 156px);">
                        <div class="container-fluid">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                            <h3 id="accident_title" style="margin-top: 15px;">
                                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                                Loading...
                                            </h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row clearfix">
                                        <div class="col-md-12"><p><b>Contact's Name: </b><span id="accident_contact_name"></span></p></div>
                                        <div class="col-md-12"><p><b>Phone No: </b><span id="accident_telno"></span></p></div>
                                        <div class="col-md-12"><p><b>Detail: </b><span id="accident_description"></span></p></div>
                                        <div class="col-md-12"><p><b>Location: </b><span id="accident_location"></span></p></div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="/accident/edit/{{ $id }}" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <footer class="clearfix">
            <div class="collapse navbar-collapse">
                <div class="row navbar-inverse navbar-fixed-bottom clearfix">
                    <div class="container-fluid" style="height:50px; padding:10px 50px;">footer</div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap&signed_in=true&key=AIzaSyAmc2mG8KSZB2lnmiTJ9nS7CIPvt2uxBHE" async defer>
</script>
<script>
    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
    $(document).ready(function() {
        $.ajax({
            url: 'http://localhost:8000/api/accident/{{ $id }}',
            dataType: "jsonp",
            success: function (data){
                var accident = JSON.parse(data);
                $("#accident_title").text(accident.accident_title);
                $("#accident_contact_name").text();
                $("#accident_telno").text(accident.accident_telno);
                $("#accident_description").text(accident.accident_description);
                $("#accident_location").text(accident.accident_latitude + ', ' + accident.accident_longitude);

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16
                });
                var pos = {
                    lat: accident.accident_latitude,
                    lng: accident.accident_longitude
                };
                map.setCenter(pos);
                var marker = new google.maps.Marker({
                    map: map,
                    animation: google.maps.Animation.DROP,
                    position: pos
                });
                marker.addListener('click', toggleBounce);
            }
        });
    });
</script>
</body>
</html>