<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_requirement_feedback', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('applicant_requirement_feedback_id');
            $table->integer('applicant_requirement_feedback_ar_id')->nullable();
            $table->integer('applicant_requirement_feedback_arp_id')->nullable();
            $table->text('applicant_requirement_feedback_public_notes')->nullable();
            $table->integer('applicant_requirement_feedback_ptp')->nullable();
            $table->text('applicant_requirement_feedback_private_notes')->nullable();
            $table->text('applicant_requirement_feedback_next_review_date')->nullable();
            $table->dateTime('applicant_requirement_feedback_date_created')->nullable();
            $table->dateTime('applicant_requirement_feedback_date_updated')->nullable();
            $table->integer('applicant_requirement_feedback_created_by')->nullable();
            $table->integer('applicant_requirement_feedback_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE applicant_requirement_feedback ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('applicant_requirement_feedback');
    }
};
