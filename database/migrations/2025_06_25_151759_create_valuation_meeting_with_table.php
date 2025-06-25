<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_meeting_with', function (Blueprint $table) {
            $table->id('valuation_meeting_with_id');
            $table->string('valuation_meeting_with_name', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_meeting_with');
    }
};
