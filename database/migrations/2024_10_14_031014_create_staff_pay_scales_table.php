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
        Schema::create('staff_pay_scales', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('basic')->default('0');
            $table->string('da')->default('0');
            $table->string('hra')->default('0');
            $table->string('conveyance')->default('0');
            $table->string('cca')->default('0');
            $table->string('bonus')->default('0');
            $table->string('incentive')->default('0');
            $table->string('epf_deduction')->default('0');
            $table->string('esi')->default('0');
            $table->string('income_tax')->default('0');
            $table->string('loan')->default('0');
            $table->string('total')->default('0');
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
        Schema::dropIfExists('staff_pay_scales');
    }
};
