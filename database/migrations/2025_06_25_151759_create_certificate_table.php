<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificate', function (Blueprint $table) {
            $table->id('certificate_id');
            $table->integer('certificate_property')->nullable();
            $table->smallInteger('certificate_type')->nullable();
            $table->text('certificate_reference')->nullable();
            $table->text('certificate_link')->nullable();
            $table->string('certificate_rating', 4)->nullable();
            $table->date('certificate_start_date')->nullable();
            $table->date('certificate_expiry_date')->nullable();
            $table->text('certificate_notes')->nullable();
            $table->text('certificate_notes_private')->nullable();
            $table->integer('certificate_renewal_contractor')->nullable();
            $table->smallInteger('certificate_renewal_instructed')->nullable();
            $table->dateTime('certificate_renewal_last_instructed')->nullable();
            $table->integer('certificate_renewal_instructed_by')->nullable();
            $table->dateTime('certificate_date_created')->nullable();
            $table->integer('certificate_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificate');
    }
};
