<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarLogTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('car_log', function (Blueprint $table) {
            $table->increments('id'); // Primary Key, Auto increment
            $table->integer('car_id'); // Foreign Key -> table:car.id
            $table->integer('staff_id'); // Foreign Key -> table:staff.id
            $table->timestamp('car_login_datetime')->nullable(); // Login Timestamp
            $table->timestamp('car_logout_datetime')->nullable(); // Logout Timestamp
            $table->timestamps(); // Auto create from migration
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('staff');
    }
}
