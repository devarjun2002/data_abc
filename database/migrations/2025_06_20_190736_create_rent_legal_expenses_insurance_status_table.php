<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rent_legal_expenses_insurance_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('rleis_id');
            $table->text('rleis_name')->nullable();
            $table->tinyInteger('rleis_sort')->nullable();
        });
        DB::statement("ALTER TABLE rent_legal_expenses_insurance_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('rent_legal_expenses_insurance_status');
    }
};
