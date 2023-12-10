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
        Schema::create('experience_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_detail_id');
            $table->string('company_name')->nullable();
            $table->string('duration')->nullable();
            $table->string('designation')->nullable();
            $table->text('nature_of_work')->nullable();
            $table->string('reference')->nullable();
            $table->string('experience_certificate_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_details');
    }
};
