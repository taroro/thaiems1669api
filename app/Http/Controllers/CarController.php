<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;

class CarController extends Controller
{
    public function index($id = null)
    {
        if($id == null) {
            return CarModel::orderBy('car_id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }
}
