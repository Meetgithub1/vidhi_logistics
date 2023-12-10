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
        Schema::create('academic_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_detail_id');
            $table->text('institute_university')->nullable();
            $table->string('year_of_passing')->nullable();
            $table->string('marks')->nullable();
            $table->string('education_image')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_details');
    }
};
