<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_tenure_type', function (Blueprint $table) {
            $table->smallInteger('property_tenure_type_id')->nullable();
            $table->primary('property_tenure_type_id');
            $table->string('property_tenure_type_name', 25)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_tenure_type');
    }
};
