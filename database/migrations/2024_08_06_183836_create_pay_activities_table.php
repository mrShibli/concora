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
        Schema::create('pay_activities', function (Blueprint $table) {
            $table->id();
            $table->string('deposit_amount');
            $table->string('method');
            $table->date('payment_date');
            $table->string('slip_invoice_number')->nullable();
            $table->string('slip_invoice_file');
            $table->string('is_recevied')->nullable();
            $table->string('applicant_id');
            $table->string('status');
            $table->string('recomNote')->nullable();

            $table->unsignedBigInteger('request_deposit_by');
            $table->unsignedBigInteger('add_payment_by');
            $table->unsignedBigInteger('receive_deposit_by');
            $table->unsignedBigInteger('request_credit_by');
            $table->unsignedBigInteger('accept_credit_by');
            $table->unsignedBigInteger('sent_modified_by');
            $table->unsignedBigInteger('modified_by');

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
        Schema::dropIfExists('pay_activities');
    }
};
