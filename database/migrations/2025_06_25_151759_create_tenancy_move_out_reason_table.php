<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_move_out_reason', function (Blueprint $table) {
            $table->id('tenancy_move_out_reason_id');
            $table->text('tenancy_move_out_reason_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_move_out_reason');
    }
};
