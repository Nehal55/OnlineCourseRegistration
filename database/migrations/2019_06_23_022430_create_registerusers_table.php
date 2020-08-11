<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerusers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('year');
            $table->string('term');
            $table->string('session');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('restrict');
            $table->integer('halls_id')->unsigned();
            $table->foreign('halls_id')->references('id')->on('halls')->onDelete('restrict');
            
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
        Schema::dropIfExists('registerusers');
    }
}
