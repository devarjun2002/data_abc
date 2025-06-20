<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('email_template', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('email_template_id');
            $table->text('email_template_name')->nullable();
            $table->tinyInteger('email_template_category')->nullable();
            $table->text('email_template_to')->nullable();
            $table->text('email_template_cc')->nullable();
            $table->text('email_template_bcc')->nullable();
            $table->text('email_template_subject')->nullable();
            $table->text('email_template_body')->nullable();
            $table->dateTime('email_template_date_created')->nullable();
            $table->dateTime('email_template_date_updated')->nullable();
            $table->integer('email_template_created_by')->nullable();
            $table->integer('email_template_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE email_template ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('email_template');
    }
};
