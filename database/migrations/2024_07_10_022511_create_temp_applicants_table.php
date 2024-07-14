<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->integer('current_step')->unsigned()->default(1);
            $table->longText('applicant_data1')->nullable();
            $table->longText('applicant_data2')->nullable();
            $table->longText('applicant_data3')->nullable();
            $table->longText('applicant_images')->nullable();
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
        Schema::dropIfExists('temp_applicants');
    }
};
