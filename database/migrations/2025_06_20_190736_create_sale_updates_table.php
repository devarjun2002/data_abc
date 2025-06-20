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
            $table->engine = 'InnoDB';
            $table->increments('sale_updates_id');
            $table->integer('sale_updates_sale_id')->nullable();
            $table->text('sale_updates_public_notes')->nullable();
            $table->text('sale_updates_private_notes')->nullable();
            $table->tinyInteger('sale_updates_notify_vendor')->nullable();
            $table->tinyInteger('sale_updates_notify_buyer')->nullable();
            $table->tinyInteger('sale_updates_notify_vendor_solicitor_intermediary')->nullable();
            $table->tinyInteger('sale_updates_notify_buyer_solicitor_intermediary')->nullable();
            $table->tinyInteger('sale_updates_notify_vendor_solicitor')->nullable();
            $table->tinyInteger('sale_updates_notify_buyer_solicitor')->nullable();
            $table->tinyInteger('sale_updates_notify_vendor_mortgage_advisor')->nullable();
            $table->tinyInteger('sale_updates_notify_buyer_mortgage_advisor')->nullable();
            $table->tinyInteger('sale_updates_notify_sales_progression')->nullable();
            $table->dateTime('sale_updates_date_created')->nullable();
            $table->integer('sale_updates_created_by')->nullable();
        });
        DB::statement("ALTER TABLE sale_updates ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('sale_updates');
    }
};
