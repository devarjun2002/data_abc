<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_renewal_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenancy_renewal_status_id');
            $table->text('tenancy_renewal_status_name')->nullable();
            $table->tinyInteger('tenancy_renewal_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE tenancy_renewal_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_renewal_status');
    }
};
