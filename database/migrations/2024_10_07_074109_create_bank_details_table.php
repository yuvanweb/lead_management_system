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
        Schema::create('bank_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('aadhar_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('bank_number')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_number')->nullable();
            $table->string('pf_joining_date')->nullable();
            $table->string('pf_number')->nullable();
            $table->string('est_number')->nullable();
          
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
        Schema::dropIfExists('bank_details');
    }
};
