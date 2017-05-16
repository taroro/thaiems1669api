<?php

namespace App\Http\Controllers\ThaiEms1669;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Accident;

class AccidentController extends Controller {
    public function index($id = null) {
        if($id == null) {
            $result = Accident::orderBy('accident_level_id', 'asc')->get();
        } else {
            $result = $this->show($id);
        }
        if($_GET['callback'] == null) {
            return json_encode($result);
        } else {
            return $_GET['callback'] . "(" . json_encode($result) .")";
        }
    }

    public function show($id) {
        return $result = json_encode(Accident::find($id));
    }

    public function insert(Request $request) {
        $accident = new Accident;
        $accident->accident_title = trim($request->input('accident_title'));
        $accident->accident_telno = trim($request->input('accident_telno'));
        $accident->accident_description = trim($request->input('accident_description'));
        $accident->accident_level_id = $request->input('accident_level_id');
        $accident->accident_latitude = $request->input('accident_latitude');
        $accident->accident_longitude = $request->input('accident_longitude');
        $accident->accident_is_submit = 0;
        $accident->accident_create_timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $accident->accident_status = 0;
        $accident->save();
        $result = json_encode(array("result" => 1, "message" => "Accident record successfully created with id " . $accident->id));
        if(isset($_GET['callback'])) {
            return $_GET['callback'] . "(" . $result .")";
        } else {
            return $result;
        }
    }

    public function update(Request $request, $id) {
        $accident = Accident::find($id);
        $accident->accident_title = trim($request->input('accident_title'));
        $accident->accident_telno = trim($request->input('accident_telno'));
        $accident->accident_description = trim($request->input('accident_description'));
        $accident->accident_level_id = $request->input('accident_level_id');
        $accident->accident_latitude = $request->input('accident_latitude');
        $accident->accident_longitude = $request->input('accident_longitude');
        $accident->save();
        $result = json_encode(array("result" => 1, "message" => "Accident record successfully updated with id " . $accident->id));
        if(isset($_GET['callback'])) {
            return $_GET['callback'] . "(" . $result .")";
        } else {
            return $result;
        }
    }

    public function delete($id) {
        $accident = Accident::find($id)->delete();
        $result = json_encode(array("result" => 1, "message" => "Accident record successfully deleted"));
        if($_GET['callback'] == null) {
            return $result;
        } else {
            return $_GET['callback'] . "(" . $result .")";
        }
    }
}
