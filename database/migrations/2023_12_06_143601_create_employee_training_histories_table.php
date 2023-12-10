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
        Schema::create('employee_training_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_detail_id');
            $table->text('description_of_training')->nullable();
            $table->string('training_given_by')->nullable();
            $table->date('date_of_training')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_training_histories');
    }
};
