<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user_id');
            $table->string('plan_title', 50);
            $table->string('tour_destination', 20);
            $table->longText('tour_planning_description')->default(null);
            $table->integer('days_to_stay')->default(1);
            $table->timestamp('tour_starting_date');
            $table->timestamp('tour_ends_date');
            $table->double('tour_total_budget', 8,2)->default(0.00);
            $table->timestamps();
            $table->foreign('fk_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourplans');
    }
}
