<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_decline_reason', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('application_decline_reason_id');
            $table->text('application_decline_reason_name')->nullable();
        });
        DB::statement("ALTER TABLE application_decline_reason ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('application_decline_reason');
    }
};
