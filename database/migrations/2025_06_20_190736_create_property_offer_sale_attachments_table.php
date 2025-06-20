<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_offer_sale_attachments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_offer_sale_attachments_id');
            $table->integer('property_offer_sale_id')->nullable();
            $table->text('property_offer_sale_attachments_filename')->nullable();
            $table->text('property_offer_sale_attachments_caption')->nullable();
            $table->string('property_offer_sale_attachments_sort')->nullable();
            $table->dateTime('property_offer_sale_attachments_date_created')->nullable();
            $table->integer('property_offer_sale_attachments_created_by')->nullable();
        });
        DB::statement("ALTER TABLE property_offer_sale_attachments ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_offer_sale_attachments');
    }
};
