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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('photo');
            $table->string('admission_no');
            $table->string('college');
            $table->string('applicant_name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('age');
            $table->string('nationality');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('religion');
            $table->text('permanant_address');
            $table->text('communication_address');
            $table->string('phone_number');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
