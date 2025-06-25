<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_inspection_frequency', function (Blueprint $table) {
            $table->id('tenancy_inspection_frequency_id');
            $table->string('tenancy_inspection_frequency_name', 15)->nullable();
            $table->smallInteger('tenancy_inspection_frequency_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_inspection_frequency');
    }
};
