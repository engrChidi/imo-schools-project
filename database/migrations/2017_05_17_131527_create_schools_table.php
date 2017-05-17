<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('school_name');
            $table->string('school_address');
            $table->string('avatar');
            $table->string('motto');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('school_website');
            $table->string('school_facilities');
            $table->string('school_strong_point');
            $table->string('comment');
            $table->string('upcoming_event');
            $table->string('iss_id');
            $table->string('admission_requirement');
            $table->string('school_fees');
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
        Schema::dropIfExists('schools');
    }
}
