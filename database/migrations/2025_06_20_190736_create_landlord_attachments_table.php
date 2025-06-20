<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('landlord_attachments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('landlord_attachments_id');
            $table->integer('landlord_id')->nullable();
            $table->text('landlord_attachments_file_name')->nullable();
            $table->integer('landlord_attachments_file_size')->nullable();
            $table->text('landlord_attachments_caption')->nullable();
            $table->tinyInteger('landlord_attachments_sort')->nullable();
            $table->dateTime('landlord_attachments_date_created')->nullable();
            $table->integer('landlord_attachments_created_by')->nullable();
            $table->integer('landlord_attachments_document_type_id')->nullable();
        });
        DB::statement("ALTER TABLE landlord_attachments ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('landlord_attachments');
    }
};
