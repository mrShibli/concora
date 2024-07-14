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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('position_id'); // Change to unsignedBigInteger
            $table->string('nationality');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('martialstatus');
            $table->string('religion');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('policeStation');
            $table->string('zip');
            $table->string('homeaddrss');
            $table->string('nidorcnicnumber');
            $table->string('nidorcnicexpiry');
            $table->string('nid_cnic_front')->nullable();
            $table->string('nid_cnic_back')->nullable();
            $table->string('uaeresident')->nullable();
            $table->string('emiratesid')->nullable();
            $table->string('emirates_expiry');
            $table->string('date_of_birth');
            $table->string('contact_number');
            $table->string('whatsapp_number');
            $table->string('email');
            $table->string('applicant_image');
            $table->string('applicant_passport');
            $table->string('passportno');
            $table->string('date_of_expiry');
            $table->string('applicant_resume')->nullable();
            $table->string('appli_dri_number')->nullable(); // Home
            $table->string('appli_dri_expiry')->nullable(); // Home
            $table->string('specialpage')->nullable();
            $table->string('appli_dri_lisence_frontpart')->nullable();
            $table->string('appli_dri_lisence_backpart')->nullable();
          
            $table->string('have_uae_licence')->nullable();
            $table->string('UAE_Resident_Visa_No')->nullable();
            $table->string('UAE_License_No')->nullable();
            $table->string('SIM_No')->nullable();
            $table->string('UAE_DL_Front')->nullable();
            $table->string('UAE_DL_Back')->nullable();

            $table->string('submissionid')->nullable();
            $table->string('otp')->nullable();
            $table->boolean('otp_verified')->default(false);
            $table->timestamp('otp_generated_at')->nullable();
            $table->string('sms_otp')->nullable();
            $table->boolean('sms_otp_verified')->default(false);
            $table->timestamp('sms_otp_generated_at')->nullable();
            $table->string('applicant_status')->nullable();
            $table->enum('applicant_status', ['new_entry', 'checked', 'editted', 'invited','called','hired', 'accepted', 'rejected', 'under_review', 'shortlisted', 'pending', 'offer_extended', 'offer_accepted', 'offer_declined', 'reschedule_requested'])->default('new_entry');
            $table->boolean('viewed')->default(false);
            $table->string('reference')->nullable();
            $table->string('reference')->nullable();
            $table->decimal('balance', 8, 2)->default(-6000.00);
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
        Schema::dropIfExists('applicants');
    }
};
