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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('lead_created_by_name');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_contact_no');
            $table->string('item_enquired');
            $table->string('price_quoted');
            $table->string('qty');
            $table->integer('lead_source');
            $table->integer('lead_status')->default(1);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('leads');
    }
};
