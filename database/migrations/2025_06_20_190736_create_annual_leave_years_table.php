<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('annual_leave_years', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('annual_leave_years_year')->nullable();
            $table->primary('annual_leave_years_year');
            $table->tinyInteger('annual_leave_years_statutory_entitlement_days')->nullable();
        });
        DB::statement("ALTER TABLE annual_leave_years ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('annual_leave_years');
    }
};
