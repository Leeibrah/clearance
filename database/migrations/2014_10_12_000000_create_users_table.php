<?php

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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('email')->unique()->nullable();
            $table->string('phone');
            $table->string('password');
            $table->string('registration_number');
            $table->string('nationality');
            $table->string('gender');
            $table->date('dob');
            $table->string('department');
            $table->integer('year');
            $table->integer('duration');
            $table->boolean('status')->default(1);
            $table->boolean('active')->default(1);
            $table->string('activation_code')->nullable();
            $table->timestamp('activated_at')->nullable();
            $table->boolean('is_admin');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
