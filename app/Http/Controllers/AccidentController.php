<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccidentModel;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

class AccidentController extends Controller {
    public function index() {
        Mapper::map(
            53.3812,
            -1.4700,
            [
                'zoom' => 16,
                'draggable' => true,
                'marker' => false,
                'eventAfterLoad' => 'circleListener(map[0].shape[0].circle_0);'
            ]
        );
        return view('index');
    }
}
