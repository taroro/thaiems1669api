<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accident extends Model {
    protected $table = 'accident';
    protected $fillable = array(
        'id'
    , 'accident_title'
    , 'accident_contact_name'
    , 'accident_telno'
    , 'accident_description'
    , 'accident_level_id'
    , 'accident_latitude'
    , 'accident_longitude'
    , 'accident_is_submit'
    , 'accident_create_timestamp'
    , 'accident_status');
}
