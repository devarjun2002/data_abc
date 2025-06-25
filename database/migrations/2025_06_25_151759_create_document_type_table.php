<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('document_type', function (Blueprint $table) {
            $table->id('document_type_id');
            $table->text('document_type_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_type');
    }
};
