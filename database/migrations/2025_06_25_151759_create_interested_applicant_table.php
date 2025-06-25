<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('interested_applicant', function (Blueprint $table) {
            $table->id('interested_applicant_id');
            $table->integer('interested_applicant_applicant_id')->nullable();
            $table->integer('interested_applicant_property')->nullable();
            $table->text('interested_applicant_notes')->nullable();
            $table->smallInteger('interested_applicant_status')->nullable();
            $table->text('interested_applicant_status_reason')->nullable();
            $table->dateTime('interested_applicant_date_created')->nullable();
            $table->dateTime('interested_applicant_date_updated')->nullable();
            $table->integer('interested_applicant_created_by')->nullable();
            $table->integer('interested_applicant_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('interested_applicant');
    }
};
