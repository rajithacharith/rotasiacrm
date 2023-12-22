<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('email');
			//store payment details and slip info
			$table->string('payment_details');
			$table->string('payment_slip');
			//store payment status
			$table->string('payment_status');
			//store payment date
			$table->string('payment_date');
			//store payment amount
			$table->string('payment_amount');
			//store payment method
			$table->string('payment_method');
			//store payment type
			$table->string('payment_type');
			//district id
			$table->foreignId('district_id')->constrained();
			//drr id
			$table->foreignId('drr_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
