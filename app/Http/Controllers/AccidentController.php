<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccidentModel;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

class AccidentController extends Controller {
    public function index() {
        return view('index');
    }

    public function detail($id = null) {
        return view('accident_detail', ["id" => $id]);
    }

    public function edit($id = null) {
        return view('accident_edit', ["id" => $id]);
    }
}
