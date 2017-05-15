<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccidentLevelTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('accident_level', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accident_level_title', 50);
            $table->string('accident_level_code', 50);
            $table->string('accident_level_color', 10);
            $table->integer('accident_level_order');
            $table->integer('accident_level_status');
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
