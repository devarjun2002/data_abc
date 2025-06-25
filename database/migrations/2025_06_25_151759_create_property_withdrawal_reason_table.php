<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_withdrawal_reason', function (Blueprint $table) {
            $table->id('property_withdrawal_reason_id');
            $table->text('property_withdrawal_reason_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_withdrawal_reason');
    }
};
