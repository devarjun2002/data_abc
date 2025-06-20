<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_login_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('employee_login_log_id');
            $table->integer('employee_login_log_employee_id')->nullable();
            $table->dateTime('employee_login_log_start_date_time')->nullable();
            $table->dateTime('employee_login_log_date_time')->nullable();
            $table->smallInteger('employee_login_log_minutes_late')->nullable();
            $table->text('employee_login_log_ip_address')->nullable();
            $table->text('employee_login_log_notes')->nullable();
            $table->tinyInteger('employee_login_log_active')->nullable();
            $table->dateTime('employee_login_log_date_updated')->nullable();
            $table->integer('employee_login_log_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE employee_login_log ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('employee_login_log');
    }
};
