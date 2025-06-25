<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('landlord_nrl_status', function (Blueprint $table) {
            $table->id('landlord_nrl_status_id');
            $table->text('landlord_nrl_status_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('landlord_nrl_status');
    }
};
