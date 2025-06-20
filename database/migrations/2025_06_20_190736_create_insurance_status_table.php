<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('insurance_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('insurance_status_id');
            $table->text('insurance_status_name')->nullable();
        });
        DB::statement("ALTER TABLE insurance_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('insurance_status');
    }
};
