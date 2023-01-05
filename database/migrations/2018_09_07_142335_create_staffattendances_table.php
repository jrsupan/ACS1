<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffattendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffattendances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_id')->index();
            $table->time('time_in');
            $table->time('time_out');
            $table->date('date');
            $table->time('working_hour');
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
        Schema::dropIfExists('staffattendances');
    }
}
