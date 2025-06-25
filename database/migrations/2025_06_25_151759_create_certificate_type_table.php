<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificate_type', function (Blueprint $table) {
            $table->id('certificate_type_id');
            $table->text('certificate_type_name')->nullable();
            $table->text('certificate_type_property_field')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificate_type');
    }
};
