<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_number');
            $table->string('student_id');
            $table->string('course');
            $table->string('unit');
            $table->string('lecturer');
            $table->boolean('active')->default(1);
            $table->string('status');
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
        Schema::drop('attendances');
    }
}
