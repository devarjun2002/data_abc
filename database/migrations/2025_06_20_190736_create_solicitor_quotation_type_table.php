<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('solicitor_quotation_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('solicitor_quotation_type_id');
            $table->string('solicitor_quotation_type_name', 30)->nullable();
        });
        DB::statement("ALTER TABLE solicitor_quotation_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('solicitor_quotation_type');
    }
};
