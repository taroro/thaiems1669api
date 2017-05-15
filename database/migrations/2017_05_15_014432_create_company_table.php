<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_fullname', 100);
            $table->string('company_shortname', 50);
            $table->string('company_logo_image', 100);
            $table->integer('company_status');
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
