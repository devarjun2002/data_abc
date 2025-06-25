<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bulk_email_recipient', function (Blueprint $table) {
            $table->id('bulk_email_recipient_id');
            $table->text('bulk_email_recipient_name')->nullable();
            $table->smallInteger('bulk_email_recipient_type')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bulk_email_recipient');
    }
};
