<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_deposit_action', function (Blueprint $table) {
            $table->id('deposit_action_id');
            $table->text('deposit_action_name')->nullable();
            $table->smallInteger('deposit_action_sort')->nullable();
            $table->smallInteger('deposit_action_archived')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_deposit_action');
    }
};
