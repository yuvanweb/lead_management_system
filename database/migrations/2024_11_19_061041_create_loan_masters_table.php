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
        Schema::create('loan_masters', function (Blueprint $table) {
            $table->id();
            $table->string('loan_name');
            $table->integer('user_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('due_month')->nullable();
            $table->string('emi_per_monthly')->nullable();
            $table->date('loan_start_date')->nullable();
            $table->date('loan_end_date')->nullable();
            $table->integer('payment_completed')->default('0');
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
        Schema::dropIfExists('loan_masters');
    }
};
