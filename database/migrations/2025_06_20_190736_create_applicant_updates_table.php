<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_updates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('applicant_updates_id');
            $table->integer('applicant_updates_applicant_id')->nullable();
            $table->text('applicant_updates_public_notes')->nullable();
            $table->text('applicant_updates_private_notes')->nullable();
            $table->tinyInteger('applicant_updates_notify_applicant')->nullable();
            $table->dateTime('applicant_updates_date_created')->nullable();
            $table->integer('applicant_updates_created_by')->nullable();
        });
        DB::statement("ALTER TABLE applicant_updates ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('applicant_updates');
    }
};
