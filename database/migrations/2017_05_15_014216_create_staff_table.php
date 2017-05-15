<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_firstname', 50);
            $table->string('staff_lastname', 50);
            $table->string('staff_username', 50);
            $table->string('staff_password', 50);
            $table->string('staff_image', 100);
            $table->integer('company_id');
            $table->integer('staff_status');
            $table->timestamps();
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
