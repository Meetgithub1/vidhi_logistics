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
        Schema::create('hr_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_detail_id');
            $table->string('offered_salary')->nullable();
            $table->string('revised_salary')->nullable();
            $table->date('date_of_revise_salary')->nullable();
            $table->enum('mobile_permission', ['yes', 'no'])->nullable();
            $table->enum('job_time', ['08:30 To 17:00', '09:00 To 17:30'])->nullable();
            $table->string('probation_period')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_details');
    }
};
