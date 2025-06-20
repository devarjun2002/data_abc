<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('annual_leave_accrual_method', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('annual_leave_accrual_method_id');
            $table->text('annual_leave_accrual_method_name')->nullable();
        });
        DB::statement("ALTER TABLE annual_leave_accrual_method ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('annual_leave_accrual_method');
    }
};
