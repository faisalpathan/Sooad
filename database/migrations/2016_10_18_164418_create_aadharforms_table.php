<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAadharformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('aadhars', function (Blueprint $table) {
            $table->increments('aadhar_id');
            $table->string('fullname')->unique();
            $table->string('fname');
            $table->string('mname');
            $table->string('address');
            $table->string('gender');
            $table->Integer('mobile');
            $table->Integer('user_id');
            $table->string('email');
            $table->string('DOB');
            $table->string('status')->default('pending');
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
        //
    }
}
