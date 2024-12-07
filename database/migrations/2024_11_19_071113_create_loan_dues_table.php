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
        Schema::create('loan_dues', function (Blueprint $table) {
            $table->id();
            $table->integer('loan_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('amount')->nullable();
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
          
            $table->integer('payslip_id')->nullable();
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('loan_dues');
    }
};
