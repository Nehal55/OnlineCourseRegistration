<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectcourses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('student_name');
            $table->string('course_id');
            $table->string('year');
            $table->string('term');
            $table->string('session');
            $table->string('department_name');
            $table->string('department_id');
            $table->integer('provost_status')->default(1);
            $table->integer('head_status')->default(1);
            $table->integer('payment_status')->default(1);
            
            
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
        Schema::dropIfExists('selectcourses');
    }
}
