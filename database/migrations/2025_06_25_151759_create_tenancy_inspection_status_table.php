<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_inspection_status', function (Blueprint $table) {
            $table->id('tenancy_inspection_status_id');
            $table->text('tenancy_inspection_status_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_inspection_status');
    }
};
