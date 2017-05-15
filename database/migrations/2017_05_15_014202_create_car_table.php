<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('car', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_license_no', 50);
            $table->string('car_tile', 100);
            $table->integer('company_id');
            $table->string('car_tel_no', 20);
            $table->integer('car_is_available');
            $table->integer('car_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('car');
    }
}
