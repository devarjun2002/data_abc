<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rent_legal_expenses_insurance_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('rleit_id');
            $table->string('rleit_name', 15)->nullable();
        });
        DB::statement("ALTER TABLE rent_legal_expenses_insurance_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('rent_legal_expenses_insurance_type');
    }
};
