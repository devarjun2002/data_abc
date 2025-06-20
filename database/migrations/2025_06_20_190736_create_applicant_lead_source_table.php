<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_lead_source', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('applicant_lead_source_id');
            $table->text('applicant_lead_source_name')->nullable();
        });
        DB::statement("ALTER TABLE applicant_lead_source ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('applicant_lead_source');
    }
};
