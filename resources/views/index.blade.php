<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>1669 Navigation</title>

    <!-- Fonts -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{   background-repeat: no-repeat;
            background: rgb(185,210,224); /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%, rgba(187,214,228,1) 0%, rgba(186,211,225,1) 15%, rgba(186,211,225,1) 38%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 82%, rgba(158,191,208,1) 100%); /* FF3.6-15 */
            background: -webkit-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%); /* Chrome10-25,Safari5.1-6 */
            background: radial-gradient(ellipse at center,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b9d2e0', endColorstr='#9ebfd0',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }
        .testimonial-group > .row {
            overflow-x: auto;
            white-space: nowrap;
        }
        .testimonial-group > .row > .col-md-3 {
            display: inline-block;
            float: none;
        }
        .google-map{border:3px solid #F4F4F4;}
    </style>
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
            <a class="navbar-brand" href="#">1669 NAVI </a>
        </div>
        <!-- {{ csrf_token() }} -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">หน้าแรก <span class="sr-only">(current)</span></a></li>
                <li><a href="#">เหตุด่วน/อุบัติเหตุ</a></li>
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
            <div class="col-md-9">
                <div class="row clearfix">
                    <div class="container-fluid">
                        <div style="height:calc(100vh - 256px);" id="map" class="google-map">{!! Mapper::render() !!}</div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="container-fluid testimonial-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-success" style="margin-bottom:15px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-ambulance" aria-hidden="true"></i> กู้ภัยธงแดง 1</h3>
                                    </div>
                                    <div class="panel-body">
                                        <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-info-circle"></i> ดูข้อมูล</a>
                                        <a class="btn btn-info btn-sm" href="#"><i class="fa fa-map-marker"></i> ตำแหน่ง</a>
                                        <a class="btn btn-success btn-sm" href="#"><i class="fa fa-phone-square"></i> โทร.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-warning" style="margin-bottom:15px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-ambulance" aria-hidden="true"></i> รพ.มุกอินเตอร์ฯ 1</h3>
                                    </div>
                                    <div class="panel-body">
                                        <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-info-circle"></i> ดูข้อมูล</a>
                                        <a class="btn btn-info btn-sm" href="#"><i class="fa fa-map-marker"></i> ตำแหน่ง</a>
                                        <a class="btn btn-success btn-sm" href="#"><i class="fa fa-phone-square"></i> โทร.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-danger" style="margin-bottom:15px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-ambulance" aria-hidden="true"></i> รพ.มุกดาหาร</h3>
                                    </div>
                                    <div class="panel-body">
                                        <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-info-circle"></i> ดูข้อมูล</a>
                                        <a class="btn btn-default btn-sm disabled" href="#"><i class="fa fa-map-marker"></i> ตำแหน่ง</a>
                                        <a class="btn btn-success btn-sm" href="#"><i class="fa fa-phone-square"></i> โทร.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="padding-left: 25px;">
                <div class="row clearfix">
                    <a href="addAccident" class="btn btn-danger btn-lg"><i class="fa fa-plus-square" aria-hidden="true"></i> เพิ่มเหตุด่วน/อุบัติเหตุ</a>
                </div>
                <div class="row clearfix">
                    <div class="pre-scrollable" style="max-height:calc(100vh - 156px); padding-top: 5px;" id="listAccident">
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
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'http://localhost:8000/api/accident',
            dataType: "jsonp",
            success: function (data){
                $.each( data, function( key, item ) {
                    var html = "<div class=\"panel panel-danger\" style=\"margin-right:10px; margin-bottom: 5px;\">" +
                        "<div class=\"panel-heading\">" +
                        "<h3 class=\"panel-title\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> " + item.accident_title + "</h3>" +
                        "</div>" +
                        "<div class=\"panel-body\"> " +
                        "<a class=\"btn btn-primary btn-sm\" href=\"accident/detail" + item.id + "\"><i class=\"fa fa-info-circle\"></i> ดูข้อมูล</a> " +
                        "<a class=\"btn btn-info btn-sm\" href=\"#\"><i class=\"fa fa-map-marker\"></i> ตำแหน่ง</a> " +
                        //"<a class=\"btn btn-success btn-sm\" href=\"#\"><i class=\"fa fa-phone-square\"></i> โทร.</a> " +
                        "</div>" +
                        "</div>";
                    $("#listAccident").append(html);
                });
            }
        });
    });
</script>
</body>
</html>