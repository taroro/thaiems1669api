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
            @include('menu.header')
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
                            <div class="panel-heading"><h3 style="margin-top: 15px;" id="edit_title">Add new accident</h3></div>
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
                                <a href="javascript:save()" class="btn btn-warning">Save</a>
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
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="modal">&times;</button><h4>Successful!!!</h4>
            <p>Accident's detail successfully updated.</p>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/gmap.control.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap&signed_in=true&key=AIzaSyAmc2mG8KSZB2lnmiTJ9nS7CIPvt2uxBHE" async defer>
</script>
<script>
    var map;
    var markers = [];
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16
        });
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            map.setCenter(pos);
        });
    }

    function save() {
        $.post(
            "http://localhost:8000/api/accident/",
            {
                accident_title: $("#accident_title").val(),
                accident_contact_name: $("#accident_contact_name").val(),
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
    });
</script>
</body>
</html>