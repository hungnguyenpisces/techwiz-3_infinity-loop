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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('department_id');
            $table->bigInteger('hospital_id');
            $table->bigInteger('doctor_id')->nullable();
            $table->string('self_check_symptom');
            $table->string('staff_note')->nullable();
            $table->string('date');
            $table->string('time');
            $table->string('status');
            $table->boolean('is_rated')->default(false);
            $table->boolean('is_notified')->default(false);
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
        Schema::dropIfExists('appointment');
    }
};
