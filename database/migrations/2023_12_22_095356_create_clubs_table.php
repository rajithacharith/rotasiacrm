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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('number');
			$table->string('mdio');
			$table->string('state');
			$table->string('country');
			//presidents details
			$table->string('president_first_name');
			$table->string('president_last_name');
			$table->string('president_other_names');
			$table->string('president_email')->unique();
			$table->string('president_mobile');
			//secretary details
			$table->string('secretary_first_name');
			$table->string('secretary_last_name');
			$table->string('secretary_other_names');
			$table->string('secretary_email')->unique();
			$table->string('secretary_mobile');
			//related to districts table forignID
			$table->foreignId('district_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
