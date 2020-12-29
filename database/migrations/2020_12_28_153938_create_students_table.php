<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('student_id');
            $table->string('student_name');
            $table->string('contact');
            $table->string('gender');
            $table->string('email');
            $table->string('dob');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('course_name');
            $table->string('level');
            $table->string('doa');
            $table->string('ctype');
            $table->string('course_fee');
            $table->string('ptype');
            $table->string('receive_payment');
            $table->string('due_payment');
            $table->string('trx_id');
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
        Schema::dropIfExists('students');
    }
}
