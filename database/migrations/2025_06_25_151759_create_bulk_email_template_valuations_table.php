<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bulk_email_template_valuations', function (Blueprint $table) {
            $table->id('bulk_email_template_valuations_id');
            $table->text('bulk_email_template_valuations_name')->nullable();
            $table->text('bulk_email_template_valuations_subject')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bulk_email_template_valuations');
    }
};
