<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccidentCase extends Model
{
    protected $table = 'accident';
    protected  $fillable = array(
        'id'
        , 'accident_name'
        , 'accident_tel'
        , 'accident_latitude'
        , 'accident_longitude'
        , 'accident_receiver_id'
        , 'accident_level_id'
        , 'accident_car_id'
        , 'accident_description'
        , 'accident_is_submit'
        , 'accident_added_timestamp'
        , 'accident_submited_timestamp'
        , 'accident_completed_timestamp'
        , 'accident_status');
}
