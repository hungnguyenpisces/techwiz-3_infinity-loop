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
        Schema::create('check_out_histories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('department_id');
            $table->bigInteger('hospital_id');
            $table->bigInteger('appointment_id');
            $table->string('symptoms');
            $table->string('conclusion');
            $table->bigInteger('staff_id');
            $table->bigInteger('doctor_id');
            // total double
            $table->double('total')->default(0);
            $table->boolean('isPaid')->default(false);
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
        Schema::dropIfExists('check_out_histories');
    }
};
