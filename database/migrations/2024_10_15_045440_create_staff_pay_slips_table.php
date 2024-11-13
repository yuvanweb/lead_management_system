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
        Schema::create('staff_pay_slips', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
            $table->string('employee_id')->nullable();
            $table->date('join_date')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('roll')->nullable();
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->string('aadhar_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('bank_number')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_number')->nullable();
            $table->string('pf_joining_date')->nullable();
            $table->string('pf_number')->nullable();
            $table->string('est_number')->nullable();
            $table->string('leave_taken')->nullable();
            $table->string('leave_per_month')->nullable();
            $table->string('total_day_present')->nullable();
            $table->string('basic')->nullable();
            $table->string('da')->nullable();
            $table->string('hra')->nullable();
            $table->string('conveyance')->nullable();
            $table->string('cca')->nullable();
            $table->string('bonus')->nullable();
            $table->string('incentive')->nullable();
            $table->string('epf_deduction')->nullable();
            $table->string('esi')->nullable();
            $table->string('income_tax')->nullable();
            $table->string('loan')->nullable();
            $table->string('gross_earning')->nullable();
            $table->string('gross_deduction')->nullable();
            $table->string('lop')->nullable();
            $table->string('pay_slip_genrated_gate')->nullable();
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
        Schema::dropIfExists('staff_pay_slips');
    }
};
