<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_log_rent', function (Blueprint $table) {
            $table->id('tenancy_log_rent_id');
            $table->integer('tenancy_log_rent_tenancy_id')->nullable();
            $table->decimal('tenancy_rent_old', 10, 2)->nullable();
            $table->decimal('tenancy_rent_new', 10, 2)->nullable();
            $table->text('tenancy_log_rent_notes')->nullable();
            $table->date('tenancy_log_rent_date_updated')->nullable();
            $table->integer('tenancy_log_rent_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_log_rent');
    }
};
