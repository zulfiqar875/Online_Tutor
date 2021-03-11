<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('Tid');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Gender');
            $table->string('CNIC');
            $table->string('Education');
            $table->string('Institute');
            $table->Integer('Age');
            $table->string('Contact');
            $table->string('Contact2');
            $table->string('Email');
            $table->string('Country');
            $table->string('Province');
            $table->string('City');
            $table->string('Address');
            $table->string('Username');
            $table->string('Password');
            $table->string('ScreatQuestion');
            $table->string('Answer');
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
        Schema::dropIfExists('teachers');
    }
}
