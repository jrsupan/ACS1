<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_id')->unsigned()->index();
            $table->integer('schoolyear_id')->unsigned()->index();
            $table->string('student_id')->index();
            $table->integer('studentfpid_id')->nullable()->unsigned()->index();
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('sex');
            $table->string('paddress')->nullable();
            $table->integer('age');
            $table->string('bdate');
            $table->string('bplace');
            $table->string('address');
            $table->string('contactno')->nullable();
            $table->string('email')->nullable();
            $table->string('religion')->nullable();
            $table->string('father_fname')->nullable();
            $table->string('father_mname')->nullable();
            $table->string('father_lname')->nullable();
            $table->string('father_oaddress')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_contactno')->nullable();
            $table->string('father_office')->nullable();
            $table->string('mother_fname')->nullable();
            $table->string('mother_mname')->nullable();
            $table->string('mother_lname')->nullable();
            $table->string('mother_oaddress')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_contactno')->nullable();
            $table->string('mother_office')->nullable();
            $table->string('brother_name1')->nullable();
            $table->integer('age1')->nullable();
            $table->string('brother_name2')->nullable();
            $table->integer('age2')->nullable();
            $table->string('brother_name3')->nullable();
            $table->integer('age3')->nullable();
            $table->string('sister_name1')->nullable();
            $table->integer('ages1')->nullable();
            $table->string('sister_name2')->nullable();
            $table->integer('ages2')->nullable();
            $table->string('sister_name3')->nullable();
            $table->integer('ages3')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_info')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('level_id')->references('id')->on('levels')->onDelete('no action')->onUpdate('no action');

        });

         
        
         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
