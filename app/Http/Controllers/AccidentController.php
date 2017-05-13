<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccidentModel;

class AccidentController extends Controller
{
    public function index($id = null)
    {
        if($id == null) {
            return AccidentModel::orderBy('accident_level_id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function store(Request $request)
    {
        $accident = new AccidentModel;
        $accident->accident_name = $request->input('accident_name');
        $accident->accident_tel = $request->input('accident_tel');
        $accident->accident_latitude = $request->input('accident_latitude');
        $accident->accident_longitude = $request->input('accident_longitude');
        $accident->accident_receiver_id = $request->input('accident_receiver_id');
        $accident->accident_level_id = $request->input('accident_level_id');
        $accident->accident_car_id = $request->input('accident_car_id');
        $accident->accident_description = $request->input('accident_description');
        $accident->accident_is_submit = $request->input('accident_is_submit');
        $accident->accident_added_timestamp = $request->input('accident_added_timestamp');
        $accident->accident_submited_timestamp = $request->input('accident_submited_timestamp');
        $accident->accident_completed_timestamp = $request->input('accident_completed_timestamp');
        $accident->accident_status = $request->input('accident_status');
        $accident->save();
        return 'Accident record successfully created with id ' . $accident->id;
    }

    public function show($id)
    {
        return AccidentModel::find($id);
    }

    public function update(Request $request, $id)
    {
        $accident = AccidentModel::find($id);
        $accident->accident_name = $request->input('accident_name');
        $accident->accident_tel = $request->input('accident_tel');
        $accident->accident_latitude = $request->input('accident_latitude');
        $accident->accident_longitude = $request->input('accident_longitude');
        $accident->accident_receiver_id = $request->input('accident_receiver_id');
        $accident->accident_level_id = $request->input('accident_level_id');
        $accident->accident_car_id = $request->input('accident_car_id');
        $accident->accident_description = $request->input('accident_description');
        $accident->accident_is_submit = $request->input('accident_is_submit');
        $accident->accident_added_timestamp = $request->input('accident_added_timestamp');
        $accident->accident_submited_timestamp = $request->input('accident_submited_timestamp');
        $accident->accident_completed_timestamp = $request->input('accident_completed_timestamp');
        $accident->accident_status = $request->input('accident_status');
        $accident->save();
        return 'Accident record successfully updated with id ' . $accident->id;
    }

    public function destroy($id)
    {
        $accident = AccidentModel::find($id)->delete();
        return 'Accident record successfully deleted';
    }
}
