<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sunday_id');
            $table->unsignedBigInteger('monday_id');
            $table->unsignedBigInteger('tuesday_id');
            $table->unsignedBigInteger('wednesday_id');
            $table->unsignedBigInteger('thursday_id');
            $table->unsignedBigInteger('friday_id');
            $table->unsignedBigInteger('saturday_id');
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
        Schema::dropIfExists('weekly_hours');
    }
};
