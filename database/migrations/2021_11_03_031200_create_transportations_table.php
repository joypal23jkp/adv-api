<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportations', function (Blueprint $table) {
            $table->id();
            $table->string('journey_starting_place');
            $table->string('journey_ending_place');
            $table->string('journey_type_of_vehicle_used', 10);
            $table->string('journey_name_of_vehicle_used', 20);
            $table->double('journey_expense_of_vehicle_used', 8, 2)->default(0);
            $table->string('journey_condition_of_vehicle_used')->default('Good');
            $table->longText('journey_description')->default(null);
            $table->timestamp('journey_started_at');
            $table->timestamp('journey_ended_at');
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
        Schema::dropIfExists('transportations');
    }
}
