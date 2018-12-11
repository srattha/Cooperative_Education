<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('company_id');
            $table->string('faculty_id');
            $table->string('term');
            $table->string('year');
            $table->string('activities');
            $table->string('institution');
            $table->string('campus');
            $table->string('major');
            $table->string('student_id');
            $table->string('identification_number');
            $table->string('name_student');
            $table->string('year_study');
            $table->string('class_year');
            $table->string('gpa_past');
            $table->string('gpa');
            $table->string('birthday');
            $table->string('telephone');
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('student');
    }
}
