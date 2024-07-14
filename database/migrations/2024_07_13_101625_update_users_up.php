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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('nid_cnic_no')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('uae_resident')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('police_station')->nullable();
            $table->string('po')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('passport_front_page')->nullable();
            $table->string('passport_last_page')->nullable();
            $table->string('visa_copy')->nullable();
            $table->string('emirates_id_copy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
