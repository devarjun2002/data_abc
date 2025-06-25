<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bulk_email', function (Blueprint $table) {
            $table->id('bulk_email_id');
            $table->text('bulk_email_from_email')->nullable();
            $table->text('bulk_email_from_name')->nullable();
            $table->text('bulk_email_reply_to_email')->nullable();
            $table->text('bulk_email_reply_to_name')->nullable();
            $table->text('bulk_email_unsubscribe_email')->nullable();
            $table->text('bulk_email_unsubscribe_link')->nullable();
            $table->text('bulk_email_unsubscribe_subject')->nullable();
            $table->text('bulk_email_email_body')->nullable();
            $table->text('bulk_email_email_subject')->nullable();
            $table->text('bulk_email_to_email')->nullable();
            $table->text('bulk_email_cc_email')->nullable();
            $table->text('bulk_email_bcc_email')->nullable();
            $table->integer('bulk_email_customer_type')->nullable();
            $table->integer('bulk_email_property_id')->nullable();
            $table->integer('bulk_email_app_req_id')->nullable();
            $table->smallInteger('bulk_email_sent')->nullable();
            $table->dateTime('bulk_email_date_created')->nullable();
            $table->dateTime('bulk_email_date_sent')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bulk_email');
    }
};
