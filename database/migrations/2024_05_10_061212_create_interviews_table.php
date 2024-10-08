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
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_id');
            $table->string('interview_method');
            $table->string('time')->nullable();
            $table->string('address')->nullable();
            $table->string('contactnumber')->nullable();
            $table->string('meetingurl')->nullable();
            $table->string('meetingpass')->nullable();
            $table->string('zonecountry')->nullable();
            $table->string('scheduled_at')->nullable();
            $table->string('qrcode_path')->nullable();
            $table->string('message')->nullable();
            $table->bigInteger('invitedby')->nullable();
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
        Schema::dropIfExists('interviews');
    }
};
