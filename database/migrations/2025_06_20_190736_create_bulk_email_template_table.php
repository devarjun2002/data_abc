<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bulk_email_template', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('bulk_email_template_id');
            $table->text('bulk_email_template_name')->nullable();
            $table->text('bulk_email_template_subject')->nullable();
            $table->tinyInteger('bulk_email_template_category')->nullable();
        });
        DB::statement("ALTER TABLE bulk_email_template ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('bulk_email_template');
    }
};
