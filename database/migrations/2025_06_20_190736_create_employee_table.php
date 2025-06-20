<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('company_id')->nullable();
            $table->increments('employee_id');
            $table->string('employee_token', 40)->nullable();
            $table->tinyInteger('employee_title')->nullable();
            $table->text('employee_first_name')->nullable();
            $table->text('employee_surname')->nullable();
            $table->text('employee_mobile_number')->nullable();
            $table->text('employee_mobile_number_work')->nullable();
            $table->text('employee_direct_line')->nullable();
            $table->string('employee_internal_extension', 20)->nullable();
            $table->text('employee_email_address')->nullable();
            $table->text('employee_email_address_personal')->nullable();
            $table->text('employee_job_title')->nullable();
            $table->integer('employee_branch_id')->nullable();
            $table->integer('employee_default_vehicle_id')->nullable();
            $table->text('employee_username')->nullable();
            $table->text('employee_password')->nullable();
            $table->tinyInteger('employee_status')->nullable();
            $table->tinyInteger('employee_payroll_status')->nullable();
            $table->tinyInteger('employee_login_status')->nullable();
            $table->date('employee_dob')->nullable();
            $table->tinyInteger('employee_first_login_log')->nullable();
            $table->integer('employee_line_manager')->nullable();
            $table->integer('employee_line_manager_annual_leave')->nullable();
            $table->integer('employee_line_manager_first_login')->nullable();
            $table->text('employee_email_password')->nullable();
            $table->decimal('employee_holiday_allowance')->nullable();
            $table->tinyInteger('employee_negotiator_percentage_split')->nullable();
            $table->text('employee_lunch_break')->nullable();
            $table->tinyInteger('employee_lunch_break_minutes')->nullable();
            $table->integer('employee_annual_leave_cover')->nullable();
            $table->text('employee_working_hours')->nullable();
            $table->date('employee_start_date')->nullable();
            $table->decimal('employee_average_hours_worked_per_week')->nullable();
            $table->decimal('employee_average_days_worked_per_week')->nullable();
            $table->tinyInteger('employee_annual_leave_active')->nullable();
            $table->tinyInteger('employee_annual_leave_accrual_method')->nullable();
            $table->text('employee_hostname')->nullable();
            $table->text('employee_image_filename')->nullable();
            $table->tinyInteger('employee_email_default_new_valuation_arranged')->nullable();
        });
        DB::statement("ALTER TABLE employee ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
