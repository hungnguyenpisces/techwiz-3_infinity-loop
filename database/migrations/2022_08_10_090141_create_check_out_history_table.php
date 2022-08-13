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
            $table->string('user_id');
            $table->string('department_id');
            $table->string('hospital_id');
            $table->string('symptoms');
            $table->string('conclusion');
            $table->string('staff_id');
            $table->string('doctor_id');
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
