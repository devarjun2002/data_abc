<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_task', function (Blueprint $table) {
            $table->id('application_task_id');
            $table->integer('application_id')->nullable();
            $table->smallInteger('application_task_type')->nullable();
            $table->text('application_task_name')->nullable();
            $table->smallInteger('application_task_status')->nullable();
            $table->date('application_task_completed_date')->nullable();
            $table->text('application_task_notes')->nullable();
            $table->text('application_task_notes_private')->nullable();
            $table->smallInteger('application_task_sort')->nullable();
            $table->smallInteger('application_task_landlord_notified')->nullable();
            $table->smallInteger('application_task_applicant_notified')->nullable();
            $table->dateTime('application_task_date_updated')->nullable();
            $table->integer('application_task_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_task');
    }
};
