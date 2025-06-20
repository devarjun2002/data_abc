<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('policy_expiry_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('policy_expiry_status_id');
            $table->text('policy_expiry_status_name')->nullable();
            $table->tinyInteger('policy_expiry_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE policy_expiry_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('policy_expiry_status');
    }
};
