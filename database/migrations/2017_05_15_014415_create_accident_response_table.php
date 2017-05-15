<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccidentResponseTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('accident_response', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id');
            $table->integer('accident_id');
            $table->integer('accident_response_type');
            $table->string('accident_response_reason');
            $table->timestamp('accident_response_timestamp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('accident_level');
    }
}
