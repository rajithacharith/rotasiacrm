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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
			//type
			$table->string('type');//rotaractor, pdrr, nonrotarctor
			//status approved, pending, rejected, unpaid
			$table->string('status');
			//first name and last name and other names
			$table->string('first_name');
			$table->string('last_name');
			$table->string('other_names');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
			$table->string('mobile');
			$table->string('district');
			$table->string('mdio');
			$table->string('state');
			$table->string('country');
			$table->string('club');
			$table->string('club_number');
			//related to districts table forignID
			$table->foreignId('district_id')->constrained();
			//related to drrs table forignID
			$table->foreignId('drr_id')->constrained();
			//related to clubs table forignID
			$table->foreignId('club_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
