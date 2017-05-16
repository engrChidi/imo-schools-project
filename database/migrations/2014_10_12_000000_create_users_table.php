<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usertype');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number');
            $table->string('avatar')->nullable();
            $table->string('avatar_original')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('activated')->default(false);
            $table->boolean('reg_completed')->default(false);
            $table->string('token')->nullable();
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
        Schema::dropIfExists('users');
    }
}
