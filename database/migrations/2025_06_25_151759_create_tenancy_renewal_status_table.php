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
            $table->id('tenancy_renewal_status_id');
            $table->text('tenancy_renewal_status_name')->nullable();
            $table->smallInteger('tenancy_renewal_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_renewal_status');
    }
};
