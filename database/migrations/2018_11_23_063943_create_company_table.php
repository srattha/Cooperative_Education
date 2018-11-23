<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->nullable();
            $table->string('coordinator')->nullable();
            $table->string('coordinator_number')->nullable();
            $table->string('email')->nullable();
            $table->string('home_number')->nullable();
            $table->string('moo')->nullable();
            $table->string('industrial_estate')->nullable();
            $table->string('building')->nullable();
            $table->string('soi')->nullable();
            $table->string('road')->nullable();
            $table->string('district')->nullable();
            $table->string('amphure')->nullable();
            $table->string('province')->nullable();
            $table->string('post_code')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
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
        Schema::dropIfExists('company');
    }
}
