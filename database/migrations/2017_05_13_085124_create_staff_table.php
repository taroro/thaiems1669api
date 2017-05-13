<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create staff table
        Schema::create('staff', function(Blueprint $table) {
            $table->increments('id');
            $table->string('staff_firstname', 255);
            $table->string('staff_lastname', 255);
            $table->string('staff_username', 20);
            $table->string('staff_password', 50);
            $table->integer('staff_company_id');
            $table->string('staff_tel_no', 50);
            $table->integer('staff_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop staff table
        Schema::drop('staff');
    }
}
