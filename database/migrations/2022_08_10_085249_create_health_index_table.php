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
        Schema::create('health_indices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->float('height');
            $table->float('weight');
            $table->float('heart_rate')->nullable();
            $table->float('blood_pressure')->nullable();
            $table->string('allergies')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('health_indices');
    }
};
