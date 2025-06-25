<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificate_updates_development', function (Blueprint $table) {
            $table->id('certificate_updates_id');
            $table->integer('certificate_updates_certificate_id')->nullable();
            $table->text('certificate_updates_private_notes')->nullable();
            $table->dateTime('certificate_updates_date_created')->nullable();
            $table->integer('certificate_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificate_updates_development');
    }
};
