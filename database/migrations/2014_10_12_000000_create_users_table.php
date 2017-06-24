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
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('phone');       
            $table->string('student_number');
            $table->integer('valid_from');
            $table->integer('valid_to');
            $table->integer('course_id');
            $table->boolean('status')->default(1);
            $table->boolean('active')->default(1);
            $table->string('activation_code')->nullable();
            $table->timestamp('activated_at')->nullable();
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
