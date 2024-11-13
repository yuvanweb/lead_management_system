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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name');
            $table->integer('role_management')->default('0');
            $table->integer('user_management')->default('0');
            $table->integer('lead_management')->default('0');
            $table->integer('sales_management')->default('0');
            $table->integer('purchase_management')->default('0');
            $table->integer('hr_management')->default('0');
            $table->integer('customer_management')->default('0');
            $table->integer('master_management')->default('0');
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
        Schema::dropIfExists('roles');
    }
};
