<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create accident table
        Schema::create('accident', function(Blueprint $table) {
            $table->increments('id');
            $table->string('accident_name', 255);
            $table->string('accident_tel', 50);
            $table->double('accident_latitude');
            $table->double('accident_longitude');
            $table->integer('accident_receiver_id');
            $table->integer('accident_car_id');
            $table->integer('accident_level_id');
            $table->text('accident_description');
            $table->integer('accident_is_submit');
            $table->timestamp('accident_added_timestamp')->nullable();
            $table->timestamp('accident_submited_timestamp')->nullable();
            $table->timestamp('accident_completed_timestamp')->nullable();
            $table->integer('accident_status');
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
        // Drop accident table
        Schema::drop('accident');
    }
}
