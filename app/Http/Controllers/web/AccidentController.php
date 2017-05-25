<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class AccidentController extends Controller {
    public function index() {
        return view('index');
    }

    public function detail($id = null) {
        return view('accident.detail', ["id" => $id]);
    }

    public function edit($id = null) {
        return view('accident.edit', ["id" => $id]);
    }

    public function add($id = null) {
        return view('accident.add');
    }
}
