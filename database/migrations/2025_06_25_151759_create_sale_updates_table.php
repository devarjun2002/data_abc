<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_updates', function (Blueprint $table) {
            $table->id('sale_updates_id');
            $table->integer('sale_updates_sale_id')->nullable();
            $table->text('sale_updates_public_notes')->nullable();
            $table->text('sale_updates_private_notes')->nullable();
            $table->smallInteger('sale_updates_notify_vendor')->nullable();
            $table->smallInteger('sale_updates_notify_buyer')->nullable();
            $table->smallInteger('sale_updates_notify_vendor_solicitor_intermediary')->nullable();
            $table->smallInteger('sale_updates_notify_buyer_solicitor_intermediary')->nullable();
            $table->smallInteger('sale_updates_notify_vendor_solicitor')->nullable();
            $table->smallInteger('sale_updates_notify_buyer_solicitor')->nullable();
            $table->smallInteger('sale_updates_notify_vendor_mortgage_advisor')->nullable();
            $table->smallInteger('sale_updates_notify_buyer_mortgage_advisor')->nullable();
            $table->smallInteger('sale_updates_notify_sales_progression')->nullable();
            $table->dateTime('sale_updates_date_created')->nullable();
            $table->integer('sale_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sale_updates');
    }
};
