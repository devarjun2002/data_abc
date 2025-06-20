<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_lost_management', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_lost_management_id');
            $table->text('property_lost_management_reason')->nullable();
        });
        DB::statement("ALTER TABLE property_lost_management ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_lost_management');
    }
};
