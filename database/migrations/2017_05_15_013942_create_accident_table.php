<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccidentTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('accident', function (Blueprint $table) {
            $table->increments('id'); // Primary Key, Auto increment
            $table->string('accident_title', 255); // Accident's title. length:255
            $table->string('accident_contact_name', 255); // Accident's title. length:255
            $table->string('accident_telno', 50); // Contact Person's tel no. length:50
            $table->string('accident_description'); // Accident's description
            $table->integer('accident_level_id'); // Foreign Key -> table:accident_level.id
            $table->double('accident_latitude'); // Location latitude's Accident
            $table->double('accident_longitude'); // Location longitude's Accident
            $table->integer('accident_is_submit'); // Accident's submit status. 0 = not submit, 1 = submitted
            $table->timestamp('accident_create_timestamp')->nullable(); // Create timestamp
            $table->integer('accident_status'); // Accident's ststus. 0 = not yet complete, 1 = completed, 2 = canceled
            $table->timestamps(); // Auto create from migration. field:created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('accident');
    }
}
