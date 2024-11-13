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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
        
            $table->date('sales_date');
            $table->integer('company');
            $table->integer('product');
            $table->integer('unit');
            $table->integer('type');
            $table->integer('form');
            $table->integer('customer');
            $table->string('qnt');
            $table->integer('sales_rep');
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
        Schema::dropIfExists('sales');
    }
};
