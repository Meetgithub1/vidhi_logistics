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
        Schema::create('employees_details', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('present_address')->nullable();
            $table->string('identification')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('sub_caste')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('age')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->text('branch_address')->nullable();
            $table->date('marriage_date')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('aadhar_number')->nullable();
            $table->string('uan_number')->nullable();
            $table->string('pf_member_id')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('driving_licence_number')->nullable();
            $table->string('voter_number')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('emp_designation')->nullable();
            $table->string('department')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('category', ['direct', 'indirect'])->nullable();
            $table->enum('marital_status', ['single', 'married','divorced','widow','other'])->nullable();
            $table->text('details_of_surgical_operation')->nullable();
            $table->text('details_of_civil_or_criminal_litigation')->nullable();
            $table->string('language')->nullable();
            $table->string('current_salary')->nullable();
            $table->string('expected_salary')->nullable();
            $table->text('reason_for_job_change')->nullable();
            $table->string('emp_image')->nullable();
            $table->string('aadhar_image')->nullable();
            $table->string('pan_image')->nullable();
            $table->string('bank_passbook_image')->nullable();
            $table->string('cast_certificate_image')->nullable();
            $table->string('passport_image')->nullable();
            $table->string('voter_image')->nullable();
            $table->string('drg_licence_image')->nullable();
            $table->string('rationcard_image')->nullable();
            $table->string('blood_group_image')->nullable();
            $table->string('slc_image')->nullable();
            $table->string('salaryslip_image')->nullable();
            $table->enum('Quality_knowledge', ['yes', 'no'])->nullable();
            $table->string('compuer_knowledge')->default('Ms-office','AutoCAD','Other')->nullable();
            $table->string('notice_period')->default('ONE MONTH FROM DATE OF RESIGN')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_details');
    }
};
