<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>1669 Navigation - Edit Accident</title>

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
        .google-map{border:3px solid #F4F4F4; height: 550px;}
    </style>

    <script language="JavaScript">
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
                        <div style="" class="google-map" id="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row clearfix">
                    <div class="container-fluid">
                        <div class="panel panel-info">
                            <div class="panel-heading"><h3 style="margin-top: 15px;" id="edit_title"><i class="fa fa-spinner fa-pulse fa-fw"></i>
                                    Loading...</h3></div>
                            <div class="panel-body">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="accident_title">Title</label>
                                                    <input type="text" class="form-control" id="accident_title" name="accident_title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <label class="control-label" for="accident_level">Level</label>
                                                <select class="form-control" id="accident_level" name="accident_level">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="accident_contact_name">Contact's Name</label>
                                                    <input type="text" class="form-control" id="accident_contact_name" name="accident_contact_name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="accident_telno">Phone No</label>
                                                    <input type="text" class="form-control" id="accident_telno" name="accident_telno">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="accident_description">Description</label>
                                            <textarea class="form-control" rows="3" id="accident_description" name="accident_description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="accident_latitude">Latitude</label>
                                                    <input type="text" class="form-control" id="accident_latitude" name="accident_latitude">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="accident_longitude">Longitude</label>
                                                    <input type="text" class="form-control" id="accident_longitude" name="accident_longitude">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="javascript:saveChange()" class="btn btn-warning">Save Change</a>
                                <a href="#" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="response_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Successfully</h4>
            </div>
            <div class="modal-body">
                <p id="response_message">Accident's detail successfully updated</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap&signed_in=true&key=AIzaSyAmc2mG8KSZB2lnmiTJ9nS7CIPvt2uxBHE" async defer>
</script>
<script>
    var map;
    var markers = [];
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16
        })
    }

    function gotoLocation(lat, lng) {
        var pos = {
            lat: lat,
            lng: lng
        };
        map.setCenter(pos);
        clearMarkers();
        addMarker(pos);
    }

    function clearMarkers() {
        setMapOnAll(null);
    }

    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    function addMarker(location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
        markers.push(marker);
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    function saveChange() {
        $.post(
            "http://localhost:8000/api/accident/{{ $id }}",
            {
                accident_title: $("#accident_title").val(),
                accident_telno: $("#accident_telno").val(),
                accident_description: $("#accident_description").val(),
                accident_level_id: $("#accident_level").val(),
                accident_latitude: $("#accident_latitude").val(),
                accident_longitude: $("#accident_longitude").val(),
                _token: '{{ csrf_token() }}',
            },
            function(data) {
                $('#response_modal').modal({show:true});
                gotoLocation(parseFloat($("#accident_latitude").val()), parseFloat($("#accident_longitude").val()));
            },
            "jsonp"
        );
    }

    $(document).ready(function() {
        google.maps.event.addDomListener(window, 'load', initMap);
        $.ajax({
            url: 'http://localhost:8000/api/accident/{{ $id }}',
            dataType: "jsonp",
            success: function (data){
                var accident = JSON.parse(data);
                $("#edit_title").text("Edit Accident's Detail");
                $("#accident_contact_name").val();
                $("#accident_title").val(accident.accident_title);
                $("#accident_telno").val(accident.accident_telno);
                $("#accident_description").text(accident.accident_description);
                $("#accident_latitude").val(accident.accident_latitude);
                $("#accident_longitude").val(accident.accident_longitude);

                gotoLocation(parseFloat(accident.accident_latitude), parseFloat(accident.accident_longitude));
            }
        });
    });
</script>
</body>
</html>